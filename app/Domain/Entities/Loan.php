<?php

namespace App\Domain\Entities;

class Loan
{
    private User $user;
    private Book $book;
    private \DateTime $borrowedAt;

    public function __construct(User $user, Book $book)
    {
        $this->user = $user;
        $this->book = $book;
        $this->borrowedAt = new \DateTime();
    }

    public function getBorrowedAt(): \DateTime
    {
        return $this->borrowedAt;
    }
}
