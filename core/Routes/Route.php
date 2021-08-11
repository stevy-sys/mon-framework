<?php

namespace Core\Routes;

use Core\Database\DBConnection;



class Route {

    public $path;
    public $action;
    public $matches; // stockage de parametre

    public function __construct($path, $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }
    

    /**
     * recherche une path coreespondante a url passer dans l'objet
     *
     * recuperation de parametre si il existe
     * 
     * @param string $url
     * @return void
     */
    public function matches(string $url)
    { 
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path); 
        $pathToMatch = "#^$path$#";
        if (preg_match($pathToMatch, $url, $matches)) { 
            $this->matches = $matches; //["posts/12","12"]
            return true;
        } else {
            return false;
        }
    }

    /**
     * execute la methode specifique d'une controller
     *
     * @return void
     */
    public function execute()
    {
        $dbConnection = new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD);
        $params = explode('@', $this->action);

        //controller avec methode
        $controller = new $params[0]($dbConnection);
        $method = $params[1];

        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}
