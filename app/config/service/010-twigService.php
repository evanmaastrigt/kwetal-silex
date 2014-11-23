<?php

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    ['twig.path' => realpath(__DIR__ . '/../../src/Resource/view'),
        'twig.options' => [
            'cache' => realpath(__DIR__ . '/../cache/twig'),
            'strict_variables' => true,
            'debug' => true,
        ]
    ]);

$app['twig.loader.filesystem']->addPath(realpath(__DIR__ . '/../../../src/Resource/view/frontend'), 'twigFrontendTemplates');
$app['twig.loader.filesystem']->addPath(realpath(__DIR__ . '/../../../src/Resource/view/backend'), 'twigBackendTemplates');
