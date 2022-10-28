<?php
declare(strict_types=1);

use App\Factories\LoggerFactory;
use App\Factories\PDOFactory;
use App\Factories\RendererFactory;
use DI\ContainerBuilder;
use Psr\Log\LoggerInterface;
use Slim\Views\PhpRenderer;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = DI\factory(LoggerFactory::class);
    $container[PhpRenderer::class] = DI\factory(RendererFactory::class);
    $containerBuilder->addDefinitions($container);
};
