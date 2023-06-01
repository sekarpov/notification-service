<?php

declare(strict_types=1);

namespace App;

interface Notifier
{
    public function send(User $user, Notification $notification);
}