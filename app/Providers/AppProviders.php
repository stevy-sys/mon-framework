<?php
namespace App\Providers;

class AppProviders {

    public function __construct() {
        
    }

    public static function execute() {
        define('VIEWS', dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR); // views/
        define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR); // public/
        define('DB_NAME', 'DB_TEST');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PWD', '');
    }
}
