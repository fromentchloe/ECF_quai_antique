<body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="../index.php"><img src="../image/Logo.png"></a>
<?php
require "connection_bdd.php";

// Vérifie si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les horaires envoyés dans la requête
    $lundi = $_POST['lundi'] ?? '';
    $mardi = $_POST['mardi'] ?? '';
    $mercredi = $_POST['mercredi'] ?? '';
    $jeudi = $_POST['jeudi'] ?? '';
    $vendredi = $_POST['vendredi'] ?? '';
    $samedi = $_POST['samedi'] ?? '';
    $dimanche = $_POST['dimanche'] ?? '';

    // Échappe les valeurs pour éviter les injections SQL
    $lundi = mysqli_real_escape_string($conn, $lundi);
    $mardi = mysqli_real_escape_string($conn, $mardi);
    $mercredi = mysqli_real_escape_string($conn, $mercredi);
    $jeudi = mysqli_real_escape_string($conn, $jeudi);
    $vendredi = mysqli_real_escape_string($conn, $vendredi);
    $samedi = mysqli_real_escape_string($conn, $samedi);
    $dimanche = mysqli_real_escape_string($conn, $dimanche);

    // Prépare la requête d'insertion
    $sql = "UPDATE schedule SET 
      lundi = '$lundi', 
      mardi = '$mardi', 
      mercredi = '$mercredi', 
      jeudi = '$jeudi', 
      vendredi = '$vendredi', 
      samedi = '$samedi', 
      dimanche = '$dimanche'";

    if (mysqli_query($conn, $sql)) {
        echo '<div style="text-align: center; margin-top: 20px;">
            <h2 style="color: #7f5539;">Changement d\'horaires effectué</h2>
            <a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none; margin-top: 20px;" href="javascript:history.go(-1)">Retour à l\'accueil</a>
        </div>';
    } else {
        echo "Erreur lors de l'insertion des horaires : " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
