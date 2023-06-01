<?php

declare(strict_types=1);

namespace App;

class Notification
{
    public function __construct(
        private string $id,
        private string $message
    ) {}

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return $this->message;
    }
}