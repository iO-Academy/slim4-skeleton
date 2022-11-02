<?php
namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddBookToDb
{
    private BooksModel $model;
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer,BooksModel $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
       $this->model->addBookToDB($_POST);

    }
}