<?php

namespace App\Domain\Entities;

class Teacher extends User
{
    public function getRole(): string
    {
        return 'Teacher';
    }
}
