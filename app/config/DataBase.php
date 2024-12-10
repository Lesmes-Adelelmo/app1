<?php
class DataBase {
    private $connection;

    public function __construct() {
        require_once 'config/env/settings.env';
        try {
            $this->connection = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function __destruct() {
        $this->pdo = NULL;
    }
}
?>
