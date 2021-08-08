<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR); // views/
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR); // public/
define('DB_NAME', 'DB_TEST');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

/**
 * $_GET['url] : url tapez par utilisateur
 */
$router = new Router($_GET['url']);


//exemple d'une route avec methode de controller
/**
 * App\Controllers\ExampleController  : namespace ou se situe le controller
 *                              index : methode a executer
 */
$router->get('/','App\Controllers\ExampleController@index');




/**
 * recherche de route existant et execution de controller
 */
try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}