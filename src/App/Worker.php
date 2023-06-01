<?php

declare(strict_types=1);

namespace App;

class Worker
{
    public function __construct(
        private Queue $queue,
        private NotificationService $notificationService
    ) {}

    public function run(): void
    {
        while ($task = $this->queue->pop()) {
            $user = $task['user'];
            $notification = $task['notification'];
            $this->notificationService->sendNotification($user, $notification);
        }
    }
}