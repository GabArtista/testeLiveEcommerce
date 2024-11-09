<?php

namespace App\Domain\Entities;

abstract class User
{
    protected string $name;
    protected string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function getRole(): string;
}
