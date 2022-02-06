<?php
namespace App\Infrastructure;

use Illuminate\Support\Facades\Log;
use \Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use App\Models\Estimate;
use App\Models\VisitorEstimate;
use Exception;
use SendGrid;
use SendGrid\Mail\Mail;

class EmailService implements EmailServiceInterface
{

    /**
     * from, subject情報
     * app/Mail/WelcomeVisitor.php
     * 
     * 複数人の場合 = モデルも複数
     * $visitorAll = Visitor::all();
     */
    public function sendWelcomeEmail(int $visitorId)
    {
        $visitor = Visitor::where('id', $visitorId)->firstOr(function() use ($visitorId) {
            Log::error("failed send welcome email. visitor_id : " . $visitorId);
            return false;
        });
        
        $address = config('mail.from.address');
        $fromName = config('mail.from.name');
        $subject = config('app.name') . 'へようこそ';

        $email = new Mail();
        $email->setFrom($address, $fromName);
        $email->setSubject($subject);
        $email->addTo($visitor->email);
        Log::debug('email to :' . $visitor->email);
        
        $estimates = VisitorEstimate::where('visitor_id', $visitorId)->get();
        Log::debug($estimates);
        $email->addContent("text/html", strval(view('email.welcome_visitor', compact('visitor', 'estimates'))));

        $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));

        try {
            $response = $sendgrid->send($email);
            if ($response->statusCode() == Response::HTTP_ACCEPTED) {
                Log::debug('successed send email via sendgrind!');
                return true;
            } else {
                Log::error("failed send welcome email. user_id: " . $visitorId);
                Log::error(json_decode($response->body()));
                return false;
            }
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            return false;
        }

    }
}