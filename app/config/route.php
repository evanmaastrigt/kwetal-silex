<?php
return [
    'config.routing' => [
        [
            'pattern' => '/',
            'controller' => 'Kwetal\Silex\Controller\Frontend\DefaultController::defaultAction',
            'method' => ['get'],
        ],
        [
            'pattern' => '/admin',
            'controller' => 'Kwetal\Silex\Controller\Backend\DefaultController::defaultAction',
            'method' => ['get'],
        ],
    ]
];
