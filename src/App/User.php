<?php

declare(strict_types=1);

namespace App;

class User
{
    public function __construct(
        private string $id,
        private string $email,
        private string $phone,
        private string $deviceType,
        private string $deviceToken
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
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function phone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function deviceType(): string
    {
        return $this->deviceType;
    }

    /**
     * @return string
     */
    public function deviceToken(): string
    {
        return $this->deviceToken;
    }
}