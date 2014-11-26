<?php

use Symfony\Component\HttpFoundation\Request;

$app = require_once realpath( __DIR__ . '/../app/bootstrap.php');

$app->get(
    '/',
    'Kwetal\Silex\Controller\Frontend\DefaultController::defaultAction'
);

$app->get(
    '/login',
    function(Request $request) use ($app) {
        return $app['twig']->render(
            '@twigFrontendTemplates/login.twig',
            [
                'error' => $app['security.last_error']($request),
                'last_username' => $app['session']->get('_security.last_username'),
            ]
        );
    }
);

$app->get(
    '/admin',
    'Kwetal\Silex\Controller\Backend\DefaultController::defaultAction'
);

$app->run();
