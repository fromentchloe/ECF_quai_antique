<?php
require_once 'MySQL/connection_bdd.php';

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

    // Prépare la requête de mise à jour
    $sql = "UPDATE schedule SET
            lundi = '$lundi',
            mardi = '$mardi',
            mercredi = '$mercredi',
            jeudi = '$jeudi',
            vendredi = '$vendredi',
            samedi = '$samedi',
            dimanche = '$dimanche'";

    // Exécute la requête de mise à jour
    if ($conn->query($sql) === true) {
      echo '<div style="text-align: center; margin-top: 20px;">
        <h2 style="color: #7f5539;">Changement d\'horaires effectué</h2>
        <a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none; margin-top: 20px;" href="javascript:history.go(-1)">Retour à l\'accueil</a>
    </div>';

    } else {
        echo "Erreur lors de la mise à jour des horaires: " . $conn->error;
    }

  }