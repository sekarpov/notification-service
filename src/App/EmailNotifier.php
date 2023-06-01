<?php

declare(strict_types=1);

namespace App;

class EmailNotifier implements Notifier
{
    public function send(User $user, Notification $notification)
    {
        // Реализация отправки на email
        echo 'Email sent successfully' . PHP_EOL;
    }
}