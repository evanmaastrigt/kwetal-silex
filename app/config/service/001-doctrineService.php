<?php

$app->register(
    new Silex\Provider\DoctrineServiceProvider(),
    ['db.options' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'silex',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ],
    ]);
