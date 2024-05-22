<?php
class Database {
    private $server_name = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "mglsi_news";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        mysqli_set_charset($this->conn, "utf8");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConn() {
        return $this->conn;
    }
    
}