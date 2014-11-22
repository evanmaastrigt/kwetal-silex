<?php

$app = require_once realpath( __DIR__ . '/../app/bootstrap.php');

$app->get(
    '/',
    'Kwetal\Silex\Controller\Frontend\DefaultController::defaultAction'
);

$app->get(
    '/admin',
    'Kwetal\Silex\Controller\Backend\DefaultController::defaultAction'
);

$app->run();
