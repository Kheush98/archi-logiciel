<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body>
    <?php include 'menu.php'?>
    <h1 class="titre">Tous les articles</h1>
    <div class="container">
        <?php
            include 'db.php';
            $sql = "SELECT * FROM article";
            $articles = $conn->query($sql);

            foreach ($articles as $article) {?>
                <div class="articles">
                    <h3><?php echo $article["titre"] ?></h3>
                    <p><?php echo $article["contenu"] ?></p>
                </div>
            <?php } ?>
        
    </div>
</body>
</html>