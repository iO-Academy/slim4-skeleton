<?php

declare(strict_types=1);


namespace App\Controllers;


use App\Models\ExampleModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;

class ExampleController
{
    protected ExampleModel $model;

    public function __construct(ExampleModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, Response $response): ResponseInterface
    {
        return $response->withJson(['data' => 'fake data']);
    }


}