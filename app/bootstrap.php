<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$loader = require_once __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

use Silex\Application;

$app = new Application();

$config = require_once realpath(__DIR__ . '/config/config.php');

foreach($config as $key => $value) {
    $app[$key] = $value;
}

require_once realpath( __DIR__ . '/config/service.php');

return $app;
