<body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="../index.php"><img src="../image/Logo.png"></a>
<?php
require "connection_bdd.php";
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire
  $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
  $scheduleData = [];
  foreach ($days as $day) {
    if (isset($_POST[$day])) {
      $scheduleData[$day] = $_POST[$day];
    }
  }

  // Mettre à jour les horaires dans la base de données
  $query = "UPDATE schedule SET ";
  foreach ($scheduleData as $day => $value) {
    $query .= "$day = '" . mysqli_real_escape_string($conn, $value) . "', ";
  }
  $query = rtrim($query, ', ');
  $query .= " WHERE id = 1";

  $result = mysqli_query($conn, $query);
  echo '<div style="text-align: center; margin-top: 20px;">
            <h2 style="color: #7f5539;">Changement d\'horaires effectué</h2>
            <a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none; margin-top: 20px;" href="javascript:history.go(-1)">Retour à l\'accueil</a>
        </div>';

  if (!$result) {
    echo 'Erreur lors de la mise à jour des horaires : ' . mysqli_error($conn);
    exit;
  }
} else {
  // Si la requête n'est pas de type POST, afficher un message d'erreur
  echo 'Erreur : Mauvaise méthode de requête.';
}
?>
