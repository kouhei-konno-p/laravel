<?php
namespace App\Infrastructure;

interface EmailServiceInterface
{
    public function sendWelcomeEmail(int $visitorId);
}