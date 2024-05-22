<?php
    require_once 'models/Database.php';
    require_once 'models/Article.php';
    require_once 'models/Categorie.php';
    
    $db = new Database();
    $articleModel = new Article($db->getConn());
    $categorieModel = new Categorie($db->getConn());
    
    $id = mysqli_real_escape_string($db->getConn(), $_GET['id']); 
    
    $categories = $categorieModel->getAll();
    $articles = $articleModel->getByCategorie($id);
    $libelle = $categorieModel->getLibelle($id);
    
    include 'views/fetchData.php';