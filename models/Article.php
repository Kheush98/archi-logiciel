<?php
class Article {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT * FROM article";
        return $this->conn->query($sql);
    }

    public function getByCategorie($id) {
        $sql = "SELECT * FROM article WHERE categorie = $id";
        return $this->conn->query($sql);
    }

    
}