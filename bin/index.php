<?php

declare(strict_types=1);

use App\Notification;
use App\NotificationService;
use App\PushNotifier;
use App\SMSNotifier;
use App\User;

require dirname(__DIR__) . '/vendor/autoload.php';

$notifier = new NotificationService([new SMSNotifier(), new PushNotifier()]);
$notifier->sendNotification(
    new User('1', 'oeauaoeu', 'aouaoeu', 'aoeuaoe', 'uaoeu'),
    new Notification('1', 'Test')
);