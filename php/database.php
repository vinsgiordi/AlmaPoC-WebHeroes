<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'web_heroes_db';
    private $username = 'root';
    private $password = 'password';
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->exec('set names utf8');
        } catch (PDOException $exception) {
            error_log($exception->getMessage());
            http_response_code(500);
            echo 'Connection error: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
