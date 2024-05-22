<?php
include 'db.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']); 

    $sql = "SELECT libelle FROM categorie WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $libelle = $row['libelle'];
    } else {
        $libelle = "Catégorie non trouvée";
    }

    // Requête pour récupérer les articles de cette catégorie
    $sql_articles = "SELECT * FROM article WHERE categorie = '$id'";
    $articles = $conn->query($sql_articles);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $libelle ?></title>
</head>
<body>
    <?php include 'menu.php'?>
    <h1 class="titre"><?= $libelle ?></h1>
    <div class="container">
        <?php
            if ($articles->num_rows > 0) {
                foreach ($articles as $article) {?>
                    <div class="articles">
                        <h3><?php echo $article["titre"] ?></h3>
                        <p><?php echo $article["contenu"] ?></p>
                    </div>
            <?php } 
            } else {
                echo "Aucun article trouvé dans cette catégorie.";
            }
        ?>  
    </div>
</body>
</html>
