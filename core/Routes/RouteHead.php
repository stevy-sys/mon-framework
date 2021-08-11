<?php


use Core\Routes\Router;

define('VIEWS', dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR); // views/
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR); // public/
define('DB_NAME', 'DB_TEST');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

/**
 * $_GET['url] : url tapez par utilisateur
 */
$router = new Router($_GET['url']);