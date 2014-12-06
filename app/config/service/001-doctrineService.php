<?php

$app->register(
    new Silex\Provider\DoctrineServiceProvider(),
    ['db.options' => [
        'driver' => 'pdo_mysql',
        'host' => getenv('dbHost'),
        'dbname' => getenv('dbName'),
        'user' => getenv('dbUsername'),
        'password' => getenv('dbPassword'),
        'charset' => 'utf8',
    ],
    ]);
