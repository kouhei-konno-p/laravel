<?php

namespace App\Repositories\Message;

interface MessageRepositoryInterface
{
    public function getAll();

    public function saveUserMessage(array $message);

}