<?php
require_once '../MySQL/connection_bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de l'adresse e-mail depuis le formulaire
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Vérification de l'existence du compte dans votre système
    if (mysqli_num_rows($result) == 1) {
        // Fonction de génération du jeton de réinitialisation
        function generateResetToken()
        {
            $token = bin2hex(random_bytes(32));
            return $token;
        }

        function storeResetToken($email, $token)
        {
            global $conn;
            $sql = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                $errorMessage = "Erreur lors du stockage du jeton de réinitialisation. Veuillez réessayer plus tard.";
            }
            $conn->close();
        }
    } else {
        // Compte inexistant, affichage d'un message d'erreur
        $errorMessage = "Adresse e-mail invalide";
    }

    // Envoi de l'e-mail
    if (isset($errorMessage)) {
        echo '<div><h2>' . $errorMessage . '</h2><br><a class="error-message" href="javascript:history.go(-1)">Recommencer avec une adresse e-mail valide</a></div>';
    } else {
        $token = generateResetToken();
        storeResetToken($email, $token);

        // Envoi de l'e-mail
        $to = $email;
        $subject = 'Réinitialisation de mot de passe';
        $message = 'Bonjour, veuillez cliquer sur le lien suivant pour réinitialiser votre mot de passe : reset_password.php?email=' . urlencode($email) . '&token=' . urlencode($token);
        $headers = "From: quaiantique@gmail.com\r\n";
        $headers .= "Reply-To: quaiantique@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $success = mail($to, $subject, $message, $headers);

        if ($success) {
            echo 'E-mail envoyé avec succès !';
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }

        header('Location: ./reset_password_confirmation.php');
        exit();
    }
}
?>