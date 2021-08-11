<?php

namespace Core\Controller;

use Core\Database\DBConnection;

abstract class Controller {

    protected $db;

    public function __construct(DBConnection $db)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $this->db = $db;
    }

    /**
     * methode d'affichage de vue avec le parametre a passer pour affichage
     *
     * @param string $path
     * @param array $params
     * @return void
     */
    protected function view(string $path, array $params = null)
    {
        ob_start(); //buffer
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path); //remplacer . par /
        require VIEWS . $path . '.php';
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }

    protected function getDB()
    {
        return $this->db;
    }

    // protected function isAdmin()
    // {
    //     if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
    //         return true;
    //     } else {
    //         return header('Location: /login');
    //     }
    // }
}
