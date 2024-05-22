<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mglsi_news";
    
    $conn = new mysqli($servername, $username, $password, $database);
    // Définir l'encodage des caractères
    mysqli_set_charset($conn, "utf8");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>