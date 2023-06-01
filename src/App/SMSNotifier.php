<?php

declare(strict_types=1);

namespace App;

class SMSNotifier implements Notifier
{
    public function send(User $user, Notification $notification): void
    {
        // Реализация отправки SMS
        echo 'Sms sent successfully' . PHP_EOL;
    }
}