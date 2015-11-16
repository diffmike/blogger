<?php

// root directory
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// application (source) directory
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// composer autoload
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// load config
require APP . 'config.php';

// load helpers
require APP . 'libraries/helper.php';

// load application and controller
require APP . 'core/Application.php';

// start the application
$app = new Application();
