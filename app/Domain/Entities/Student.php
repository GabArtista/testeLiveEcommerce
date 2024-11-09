<?php

namespace App\Domain\Entities;

class Student extends User
{
    public function getRole(): string
    {
        return 'Student';
    }
}
