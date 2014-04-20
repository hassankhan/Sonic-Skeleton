<?php

// Get Composer autoloading up and running
require 'vendor/autoload.php';

// Get all settings from the following files
$config = array_merge(
    require __DIR__ . '/sonic.php',
    require __DIR__ . '/site.php',
    require __DIR__ . '/config.php'
);

// Create a new instance of the application
$sonic = new Sonic\Sonic($config);

// Return instance
return $sonic;
