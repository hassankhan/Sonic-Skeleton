<?php

// Require stuff
require('vendor/autoload.php');
require('my.config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

$zepto = new Zepto\Zepto($config);
$zepto->app['router']->route(new Zepto\Route\ListRoute('/'));
$zepto->app['router']->route(new Zepto\Route\TagRoute('/tags/<:tag_name>'));
$zepto->app['router']->route(new Zepto\Route\Feed\AtomRoute('/feed'));
$zepto->run();
