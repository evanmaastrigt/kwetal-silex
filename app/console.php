<?php

use Silex\Application AS SilexApplication;
use Symfony\Component\Console\Application AS ConsoleApplication;
use Symfony\Component\Console\Helper\HelperSet;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

chdir(dirname(__DIR__));

$app = require_once('app/bootstrap.php');
$cli = true;

$console = new ConsoleApplication('Silex', '1.0');

$commands = [];

$console->addCommands($commands);

$connection = $app['orm.em']->getConnection();

$helperSet = new HelperSet(
    [
        'db' => new ConnectionHelper($connection),
        'em' => new EntityManagerHelper($app['orm.em']),
    ]
);

$console->setHelperSet($helperSet);
ConsoleRunner::addCommands($console);

$console->run();
