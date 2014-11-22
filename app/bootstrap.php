<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application();
$app['debug'] = true;

require_once realpath( __DIR__ . '/config/service.php');

return $app;
