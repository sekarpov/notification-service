<?php

declare(strict_types=1);

namespace App;

class QueueService
{
    public function __construct(
        private Queue $queue
    ) {}

    public function addToQueue(User $user, Notification $notification): void
    {
        $this->queue->push([
            'user' => $user,
            'notification' => $notification,
        ]);
    }
}