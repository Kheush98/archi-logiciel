<?php
    require_once 'models/Database.php';
    require_once 'models/Article.php';
    require_once 'models/Categorie.php';
    
    class ArticleController {
        private $articleModel;
        private $categorieModel;
        private $db;
        
        public function __construct() {
            $this->db = new Database();
            $this->articleModel = new Article($this->db->getConn());
            $this->categorieModel = new Categorie($this->db->getConn());
        }
        
        public function index() {
            $id = mysqli_real_escape_string($this->db->getConn(), $_GET['id']); 
            
            $categories = $this->categorieModel->getAll();
            $articles = $this->articleModel->getByCategorie($id);
            $libelle = $this->categorieModel->getLibelle($id);
            
            include 'views/articles.php';
        }

        public function show() {
            $id = mysqli_real_escape_string($this->db->getConn(), $_GET['id']); 
            
            $article = $this->articleModel->getById($id);
            
            include 'views/show.php';
        }

        public function create() {
            $categories = $this->categorieModel->getAll();
            
            include 'views/create.php';
        }

        public function store() {
            $data = [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'categorie_id' => $_POST['categorie']
            ];
            
            $this->articleModel->store($data);
            
            header('Location: index.php');
        }
    }
