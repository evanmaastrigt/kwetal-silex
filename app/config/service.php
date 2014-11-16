<?php
return [
    'config.providers' => [
        'doctrineDbal' => [
            'class' => 'Silex\Provider\DoctrineServiceProvider'
        ],
        'twig' => [
            'class' => 'Silex\Provider\TwigServiceProvider'
        ],
    ]
];
