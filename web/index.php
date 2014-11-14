<?php
$app = require_once  __DIR__ . '/../app/bootstrap.php';

$app->get('/', function () {
    $output = 'Hello World!';

    return $output;
});

$app->run();
