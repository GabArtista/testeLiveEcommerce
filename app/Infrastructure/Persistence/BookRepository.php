<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Entities\Book;

class BookRepository
{
    private array $books = [];

    public function save(Book $book): void
    {
        $this->books[] = $book;
    }

    public function findAll(): array
    {
        return $this->books;
    }
}
