<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Igorw\Silex\ConfigServiceProvider;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();
$app['debug'] = true;

$app->register(
    new ConfigServiceProvider(realpath(__DIR__ . "/../app/config/config.php"))
);

$app->register(
    new ConfigServiceProvider(realpath(__DIR__ . "/../app/config/service.php"))
);

$app->register(new DoctrineServiceProvider(), ['db.options' => $app['db.options']]);


return $app;
