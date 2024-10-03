<?php 

class Conexion {
    public $pdo;
    public $dsn;
    public $password;
    public $username;

    public function __construct() {
        $this->dsn = "mysql:host=127.0.0.1;dbname=udh";
        $this->username = "root"; 
        $this->password = "root";
    }

    public function abrir() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function cerrar() {
        $this->pdo = null;
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }

    public function exec($sql) {
        return $this->pdo->exec($sql);
    }
}

?>