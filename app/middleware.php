<?php
declare(strict_types=1);

use Slim\App;

return function (App $app) {
    $app->addBodyParsingMiddleware();
//    $app->add(); // example of how to add Middleware
};
