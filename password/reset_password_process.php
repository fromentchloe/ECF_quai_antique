<?php
// Connexion à la base de données
require_once '../MySQL/connection_bdd.php';

// Vérification de la méthode de requête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Vérification du nouveau mot de passe et de la confirmation
    if ($newPassword !== $confirmPassword) {
        echo 'Les mots de passe ne correspondent pas.';
        exit();
    }

    // Vérification de l'existence du compte et du jeton de réinitialisation
    $sql = "SELECT * FROM users WHERE email = '$email' AND reset_token = '$token'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Le compte et le jeton sont valides, mettez à jour le mot de passe
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateSql = "UPDATE users SET password = '$hashedPassword', reset_token = NULL WHERE email = '$email'";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            // Mot de passe réinitialisé avec succès
            echo 'Le mot de passe a été réinitialisé avec succès.';
        } else {
            // Erreur lors de la mise à jour du mot de passe
            echo 'Erreur lors de la réinitialisation du mot de passe. Veuillez réessayer.';
        }
    } else {
        // Compte ou jeton invalide, affichez un message d'erreur
        echo 'Lien de réinitialisation invalide. Veuillez réessayer.';
    }
} else {
    // Méthode de requête invalide, redirigez vers la page d'accueil ou une autre page appropriée
    header('Location: ./index.php');
    exit();
}
?>
