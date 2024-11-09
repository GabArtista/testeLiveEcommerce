<?php

namespace App\Domain\Entities;

class Book
{
    private string $title;
    private string $author;
    private string $isbn;
    private bool $isBorrowed = false;

    // Constructor
    public function __construct(string $title, string $author, string $isbn)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }

    // Getter for Title
    public function getTitle(): string
    {
        return $this->title;
    }

    // Getter for Author
    public function getAuthor(): string
    {
        return $this->author;
    }

    // Getter for ISBN
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    // Borrow the Book
    public function borrow(): void
    {
        if ($this->isBorrowed) {
            throw new \Exception('Book is already borrowed.');
        }

        $this->isBorrowed = true;
    }

    // Return the Book
    public function returnBook(): void
    {
        $this->isBorrowed = false;
    }

    // Check if Book is Borrowed
    public function isBorrowed(): bool
    {
        return $this->isBorrowed;
    }
}
