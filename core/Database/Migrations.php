<?php

namespace Core\Database;

use App\Providers\AppProviders;

class Migrations 
{
   
    public static function executeSql($sql) {
        $DBConncetion = new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD);
        $DBConncetion->getPDO()->exec($sql);
    }
}
