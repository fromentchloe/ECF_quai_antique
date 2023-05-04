
<body style=" text-align: center; background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="./index.php"><img src="./style/image/Logo.png"></a>
<?php
// Connexion à la base de données
require_once 'MySQL/connection_bdd.php';

// Récupérer les informations du formulaire de connexion
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password_hash = password_hash($password, PASSWORD_DEFAULT);
// Requête SQL pour récupérer les informations de l'utilisateur
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

// Vérifier si l'utilisateur existe et si les informations de connexion sont correctes
if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        // Les informations de connexion sont correctes, connecter l'utilisateur
        session_start();
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_is_admin'] = $user['is_admin'];
        header('Location: index.php'); // Rediriger l'utilisateur vers la page d'accueil
    } else {
        // Les informations de connexion sont incorrectes, afficher un message d'erreur
        echo '<div><h2>Mot de passe incorrect</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Réinitialiser le mot de passe</a></div>';
    }
} else {
    // L'utilisateur n'existe pas, afficher un message d'erreur
    echo '<div><h2>Email incorrect</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour à l\'accueil</a></div>';
}


?> </body>
