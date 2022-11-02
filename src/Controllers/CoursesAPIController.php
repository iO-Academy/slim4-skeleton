<?php

declare(strict_types=1);


namespace App\Controllers;


use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CoursesAPIController
{
    private BooksModel $model;

    // Here, the parameter is automatically supplied by the Dependency Injection Container based on the type hint
    public function __construct(BooksModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $courses = $this->model->getCourses();
        $responseBody = [
            'message' => 'Courses successfully retrieved from db.',
            'status' => 200,
            'data' => $courses
        ];
        return $response->withJson($responseBody);
    }
}