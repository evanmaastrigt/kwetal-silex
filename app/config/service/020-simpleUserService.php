<?php

use SimpleUser\UserServiceProvider;

$userServiveProvider = new UserServiceProvider();

$app->register($userServiveProvider);

$app->mount('/user', $userServiveProvider);

$app['security.firewalls'] = [
    'login' => [
        'pattern' => '^/user/login$',
    ],
    'create_account' => [
        'pattern' => '^/user/register$',
    ],
    'secured_area' => [
        'pattern' => '/user',

        'anonymous' => true,
        'remember_me' => [],
        'form' => [
            'login_path' => '/user/login',
            'check_path' => '/user/login_check',
        ],
        'logout' => [
            'logout_path' => '/user/logout',
        ],
        'users' => $app->share(function($app)
            {
                return $app['user.manager'];
            }
        ),
    ],
];

$app['user.options'] = [
    'templates' => [
        'layout' => '@twigFrontendTemplates/layout.twig',
    ],
];
