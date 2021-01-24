<?php

namespace App\Services\MessageService;

use Carbon\Carbon;

class MessageDto
{
    public int $id;
    public string $name;
    public string $email;
    public string $message;
    public Carbon $created_at;

    public function __construct(int $id, string $name, string $email, string $message, string $created_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->created_at = new Carbon($created_at);
    }
}
