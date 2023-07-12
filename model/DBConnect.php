<?php

namespace Model;

use PDO;
use PDOException;

class DBConnect{
    public string $dsn;
    public string $user;
    public string $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=customers";
        $this->password = "password";
        $this->user = "root";
    }

    public function connect(): PDO
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
