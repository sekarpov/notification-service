<?php

declare(strict_types=1);

namespace App;

// Queue — это абстрактный класс, который
// может быть реализован с использованием
// различных технологий для очередей, таких
// как RabbitMQ или Redis.
interface Queue
{
    public function push();

    public function pop();
}