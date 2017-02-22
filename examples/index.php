<?php
// include the autoloader.
require_once(dirname(__DIR__).'/vendor/autoload.php');

use Lib\MapFactory;

$redirects = [
    '/index.php?page1OLD' => '/index.php?page1NEW',
    '/index.php?page2OLD' => '/index.php?page2NEW',
    '/index.php?page3OLD' => '/index.php?page2NEW',
];

MapFactory::Mapper($_SERVER['REQUEST_URI'],$redirects)->run();
