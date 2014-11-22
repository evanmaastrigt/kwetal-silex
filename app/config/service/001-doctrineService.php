<?php

$app->register(
    new Silex\Provider\DoctrineServiceProvider(),
    ['db.ptions' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'silex',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ],
    ]);
