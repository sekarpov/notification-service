<?php

declare(strict_types=1);

namespace App;

class PushNotifier implements Notifier
{
    public function send(User $user, Notification $notification): void
    {
        // Реализация отправки push-уведомления
        // может быть разная для iOS и Android
        echo 'Push sent successfully' . PHP_EOL;
    }
}