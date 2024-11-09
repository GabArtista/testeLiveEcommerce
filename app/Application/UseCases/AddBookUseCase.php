<?php

namespace App\Application\UseCases;

use App\Domain\Entities\Book;
use App\Infrastructure\Persistence\BookRepository;

class AddBookUseCase
{
    private BookRepository $repository;

    public function __construct(BookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $title, string $author, string $isbn): void
    {
        $book = new Book($title, $author, $isbn);
        $this->repository->save($book);
    }
}
