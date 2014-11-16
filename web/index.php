<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$app = require_once  __DIR__ . '/../app/bootstrap.php';

$app->get(
    '/',
    'Kwetal\Silex\Controller\Frontend\DefaultController::defaultAction'
);

$app->get(
    '/admin',
    'Kwetal\Silex\Controller\Backend\DefaultController::defaultAction'
);

$app->run();
