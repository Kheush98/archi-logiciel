<?php
class Categorie {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAll() {
        $sql = "SELECT * FROM categorie";
        return $this->conn->query($sql);
    }

    public function getLibelle($id) {
        $sql = "SELECT libelle FROM categorie WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc()['libelle'];
    }
}