<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

// Require stuff
require 'config/bootstrap.php';

$sonic->app['router']->route(new Sonic\Route\TagRoute('/tags/<:tag_name>'));
$sonic->app['router']->route(new Sonic\Route\Feed\AtomRoute('/feed'));
$sonic->run();
