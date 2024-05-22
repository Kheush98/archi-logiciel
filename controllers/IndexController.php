<?php
    require_once 'models/Database.php';
    require_once 'models/Article.php';
    require_once 'models/Categorie.php';

    $db = new Database();
    $articleModel = new Article($db->getConn());
    $categorieModel = new Categorie($db->getConn());

    $articles = $articleModel->getAll();
    $categories = $categorieModel->getAll();

    include 'views/index.php';