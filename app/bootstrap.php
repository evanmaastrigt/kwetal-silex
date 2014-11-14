<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Igorw\Silex\ConfigServiceProvider;
use MJanssen\Provider\ServiceRegisterProvider;
use Silex\Application;

$app = new Application();
$app['debug'] = true;

$app->register(
    new ConfigServiceProvider(realpath(__DIR__ . "/../app/config/config.php"))
);

$app->register(
    new ConfigServiceProvider(realpath(__DIR__ . "/../app/config/service.php"))
);

$app->register(
    new ServiceRegisterProvider()
);

return $app;
