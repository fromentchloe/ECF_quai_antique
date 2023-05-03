<?php
// Connexion à la base de données
require_once './MySQL/connection_bdd.php';

// Récupération des informations du formulaire
// Récupérer les informations du formulaire d'inscription
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password_hash']);
$password_hash = password_hash($password, PASSWORD_DEFAULT); // Hasher le mot de passe
$allergies = mysqli_real_escape_string($conn, $_POST['allergies']);

// Requête SQL pour insérer un nouvel utilisateur dans la base de données
$sql = "INSERT INTO users (name, email, password_hash, allergies) VALUES ('$name', '$email', '$password_hash', '$allergies')";
if (mysqli_query($conn, $sql)) {
    // L'inscription a réussi, stocker le nom de l'utilisateur dans la session
    session_start();
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_is_admin'] = false;
    header('Location: index.php');
} else {
    // L'inscription a échoué, afficher un message d'erreur
    echo "Erreur : " . mysqli_error($conn);
}


// Fermer la connexion à la base de données
mysqli_close($conn);
?>
