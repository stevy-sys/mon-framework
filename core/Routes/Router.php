<?php

namespace Core\Routes;



use Core\Routes\Route;
use Core\Exception\NotFoundException;



/**
 * routes : array[] => stockage de tout les paths existant GET et POST avec chacun leur controller et methode respectif
 * url : url a chercher tapez par utilisateur
 */
class Router
{

    public $url;
    public $routes = [];

    public function __construct($url)
    {
        //trim enleve le /
        $this->url = trim($url, '/');
    }

    /**
     * stockage d'une path et une controller avec methode dans routes['GET]
     *
     * @param string $path
     * @param string $action
     * @return void
     */
    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    /**
     * stockage d'une path et une controller avec methode dans routes['POST]
     *
     * @param string $path
     * @param string $action
     * @return void
     */
    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    /**
     * execution de controller si le route existe dans le tableau de GET ou POST 
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url)) {
                return $route->execute();
            }
        }

        throw new NotFoundException("La page demandée est introuvable.");
    }
}
