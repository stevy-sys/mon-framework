<?php

namespace Core\Database;

use PDO;

class DBConnection {

    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    /**
     * initialisation d un objet Database
     *
     * @param string $dbname
     * @param string $host
     * @param string $username
     * @param string $password
     */
    public function __construct(string $dbname, string $host, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * recuperation de objet database a utiliser
     *
     * @return PDO
     */
    public function getPDO(): PDO
    {
        return $this->pdo ?? $this->pdo = new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->username, $this->password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8'
        ]);
    }
}
