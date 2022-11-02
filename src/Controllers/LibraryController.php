<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class LibraryController
{
    private PhpRenderer $renderer;
    private BooksModel $model;

    public function __construct(PhpRenderer $renderer, BooksModel $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $books = $this->model->getAllBooks();
        return $this->renderer->render($response, 'index.php', ['books' => $books]);
    }
}