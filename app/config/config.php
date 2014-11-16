<?php
//var_dump(is_dir(realpath(__DIR__ . '/../cache/twig')));exit;
return [
    'baseUrl' => 'http://silex.dev',
    'db.options' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'silex',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ],
    'twig.path' => realpath(__DIR__ . '/../../src/Resource/view'),
    'twig.options' => [
        'cache' => realpath(__DIR__ . '/../cache/twig'),
        'strict_variables' => true,
        'debug' => true,
    ],
];
