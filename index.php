<?php

require_once __DIR__ . '/vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/config/di.php');
$container = $containerBuilder->build();

$context = $container->get(\DI\Context::class);
$context->testDI();
