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

    public function getById($id) {
        $sql = "SELECT * FROM article WHERE id = $id";
        return $this->conn->query($sql);
    }

    public function store($data) {
        $sql = "INSERT INTO article (titre, contenu, categorie) VALUES ('".$data['titre']."', '".$data['contenu']."', ".$data['categorie'].")";
        $this->conn->query($sql);
    }
}