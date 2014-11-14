<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Knp\Provider\ConsoleServiceProvider;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();
$app['debug'] = true;

$app->register(new DoctrineServiceProvider(), [
    'db.options' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'silex',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ]
]);

return $app;
