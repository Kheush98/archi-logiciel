<?php include 'db.php' ?>
<header>
    <div class="header">
        <h1>Actualites Polytechniciennes</h1>
    </div>
    <?php
        $sql = "SELECT * FROM categorie";
        $categories = $conn->query($sql);
    ?>
    <ul>
        <li><a href="index.php">Accueil</a></li>
       <?php foreach ($categories as $categorie) { ?>
            <li><a href="fetchData.php?id=<?= $categorie['id'] ?>"><?= $categorie['libelle']?></a></li>
        <?php } ?>

    </ul>
</header>