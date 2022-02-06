<?php

namespace App\Repositories\Message;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

class MessageQueryRepository implements MessageRepositoryInterface
{

    public function getAll(): Collection
    {
        return DB::table('conversations as c')
            ->leftjoin('conversation_replies as r', 'r.conversation_id', '=', 'c.id')
            ->leftjoin('users as u_from', 'u_from.id', '=', 'c.from_user_id')
            ->leftjoin('users as u_to', 'u_to.id', '=', 'c.to_user_id')
            ->select(
                'c.*',
                'u_from.name as from_user_name',
                'u_to.name as to_user_name',
                'r.reply_message as reply',
                'r.created_at as reply_datetime',
                )
            ->get();
    }

    public function saveUserMessage(array $message): void
    {
        DB::table('conversations')->insert(
            [
                'from_user_id' => $message['from_user_id'],
                'to_user_id' => $message['to_user_id'],
                'message' => $message['message'],
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }


}