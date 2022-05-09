<?php
declare(strict_types=1);

use Psr\Http\Message\RequestInterface;
use Slim\Http\Response;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', \App\Controllers\ExampleController::class);

};
