<!DOCTYPE html>
<html>
  <head>
    <title>Le Quai Antique</title>
    <meta charset="UTF-8">
  </head>
  <body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="./index.php"><img src="./style/image/Logo.png"></a>
    <?php
// Connexion à la base de données
require_once './MySQL/connection_bdd.php';

// Récupération des informations du formulaire
// Récupérer les informations du formulaire d'inscription
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password_hash = password_hash($password, PASSWORD_DEFAULT); // Hasher le mot de passe
$allergies = mysqli_real_escape_string($conn, $_POST['allergies']);

// Vérifier si l'utilisateur existe déjà en base de données
$sql = "SELECT COUNT(*) FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$count = mysqli_fetch_array($result)[0];
if ($count > 0) {
    echo '<h2>Un compte existe déja a l\'adresse ' . $email . ' </h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Mot de passe oublier</a></div>';
} else {
    // Requête SQL pour insérer un nouvel utilisateur dans la base de données
    $sql = "INSERT INTO users (name, email, password, allergies) VALUES ('$name', '$email', '$password_hash', '$allergies')";
    if (mysqli_query($conn, $sql)) {
        // L'inscription a réussi, stocker le nom de l'utilisateur dans la session
        session_start();
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_is_admin'] = false;
        echo '<div><h2>Nous sommes heureux de vous compter parmi nos clients.</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="index.php">Retour à l\'accueil</a></div>';    
    } else {
        // L'inscription a échoué, afficher un message d'erreur
        echo "Erreur : " . mysqli_error($conn);
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
