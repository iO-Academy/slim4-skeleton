<?php
declare(strict_types=1);

use App\Factories\LoggerFactory;
use App\Factories\PDOFactory;
use App\Factories\RendererFactory;
use DI\ContainerBuilder;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = DI\factory(LoggerFactory::class);
    $container['renderer'] = DI\factory(RendererFactory::class);
    $container['PDO'] = DI\factory(PDOFactory::class);

    $containerBuilder->addDefinitions($container);
};
