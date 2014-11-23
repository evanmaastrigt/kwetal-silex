<?php

use Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider;

$app->register(
    new DoctrineOrmServiceProvider(),
    [
        'orm.proxies_dir' => sprintf('%s/app/cache/doctrine/proxies', $app['app.path']),
        'orm.default_cache' => 'array',
        'orm.em.options' => [
            'metadata_cache' => [
                'driver' => 'filesystem',
                'path' => sprintf('%s/app/cache/doctrine/metadata', $app['app.path']),
            ],
            'query_cache' => [
                'driver' => 'filesystem',
                'path' => sprintf('%s/app/cache/doctrine/query', $app['app.path']),
            ],
            'mappings' => [
                [
                    'type' => 'annotation',
                    'namespace' => 'Kwetal\\Silex\\Entity',
                    'path'  => sprintf('%s/src/Entity', $app['app.path']),
                    'use_simple_annotation_reader' => false,
                ],
            ],
            'types' => [],
        ]
    ]
);
