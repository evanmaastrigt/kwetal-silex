<?php

use Igorw\Silex\ConfigServiceProvider;

$app->register(
    new ConfigServiceProvider(realpath(__DIR__ . "/../config.php"))
);
