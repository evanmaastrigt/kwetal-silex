<?php

use Kwetal\Silex\Provider\UserProvider;

$app->register(
    new Silex\Provider\SecurityServiceProvider(),
    [
        'security.firewalls' => [
            'admin' => [
                'pattern' => '^/admin',
                'form' => [
                    'login_path' => '/login',
                    'check_path' => '/admin/login_check',
                ],
                'users' => $app->share(function() use ($app) {
                    return new UserProvider($app['orm.em']);
                }),
            ]
        ]
    ]
);
