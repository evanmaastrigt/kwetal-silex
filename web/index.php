<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = require_once  __DIR__ . '/../app/bootstrap.php';

$app->get('/', function () {
    $output = 'Hello World!';

    return $output;
});

$app->run();
