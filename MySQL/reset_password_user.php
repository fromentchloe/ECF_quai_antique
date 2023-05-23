<?php
// Connexion à la base de données
require "./connection_bdd.php";

// Vérification des paramètres de l'URL
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    // Vérification de l'existence du compte et du jeton de réinitialisation
    $sql = "SELECT * FROM users WHERE email = '$email' AND reset_token = '$token'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Le compte et le jeton sont valides
        // Affichez le formulaire de réinitialisation du mot de passe ici
        echo '<h1>Réinitialisation du mot de passe</h1>';
        echo '<form action="reset_password_process.php" method="POST">';
        echo '<input type="hidden" name="email" value="' . $email . '">';
        echo '<input type="hidden" name="token" value="' . $token . '">';
        echo '<label>Nouveau mot de passe:</label><br>';
        echo '<input type="password" name="new_password" required><br>';
        echo '<label>Confirmer le mot de passe:</label><br>';
        echo '<input type="password" name="confirm_password" required><br>';
        echo '<button type="submit">Réinitialiser le mot de passe</button>';
        echo '</form>';
    } else {
        // Compte ou jeton invalide, affichez un message d'erreur
        echo 'Lien de réinitialisation invalide. Veuillez réessayer.';
    }
} else {
    // Paramètres manquants, redirigez vers la page de demande de réinitialisation du mot de passe
    header('Location: ./views/forget_psw.php');
    exit();
}
?>
