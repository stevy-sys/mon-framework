<?php


use Core\Routes\Router;
use App\Providers\AppProviders;
AppProviders::execute();

/**
 * $_GET['url] : url tapez par utilisateur
 */
if (!isset($_GET['url'])) {
    $_GET['url'] = '/' ;
}
$router = new Router($_GET['url']);