<?php

use Symfony\Component\Finder\Finder;

$finder = new Finder();

$finder->files()
    ->followLinks()
    ->sortByName()
    ->name('*Service.php')
    ->in(realpath(__DIR__ . '/service'));

foreach ($finder as $file) {
    require_once $file->getRealpath();
}
