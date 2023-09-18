<?php

use App\Providers\AppProviders;
AppProviders::execute();

//exemple d'une route avec methode de controller
/**
 * App\Controllers\ExampleController  : namespace ou se situe le controller
 *                              index : methode a executer
 */
$router->get('/','App\Controllers\ExampleController@index');