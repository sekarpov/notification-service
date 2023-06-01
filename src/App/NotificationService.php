<?php

declare(strict_types=1);

namespace App;

class NotificationService
{
    public function __construct(
        private array $notifiers
    ) {}

    public function sendNotification(User $user, Notification $notification): void
    {
        foreach ($this->notifiers as $notifier) {
            $notifier->send($user, $notification);
        }
    }
}