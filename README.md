# Sonic Skeleton

This repo is a skeleton project. The actual framework code is at [github.com/hassankhan/Sonic](//github.com/hassankhan/Sonic).

## Getting Started

### System Requirements

You need **PHP >= 5.3.0**, and [Composer](//getcomposer.org/) is highly recommended.

### Install

#### Composer install

    composer create-project hassankhan/sonic-skeleton <YOUR_PROJECT_NAME>
    composer install

#### Manual install

***Coming soon***

### Project setup

// All the stuff in config/

### First Run

After running ``composer install``, your project root should now look like this:

    .
    ├── .htaccess
    ├── composer.json
    ├── composer.lock
    ├── index.php
    ├── config/
    ├── content/
    ├── plugins/
    ├── templates/
    └── vendor/

Crack open ``index.php`` in your text editor and you'll see

    require 'config/bootstrap.php';   // The application is set up here
    $sonic->run();                    // Run app

### Setup your web server

#### Apache

Ensure the `.htaccess` and `index.php` files are in the same public-accessible directory. The `.htaccess` file should at the very minimum contain this code:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]

#### Others

Sonic hasn't been tested on other configurations yet, but because of how similar it is to [Slim](//slimframework.com/), the same instructions should work.

## Documentation

You can check out more in-depth documentation [here](//github.com/hassankhan/Sonic/wiki/Documentation).

## License

Sonic Skeleton is released under the MIT public license.
