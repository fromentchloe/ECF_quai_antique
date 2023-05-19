<body style="text-align: center; background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="./index.php"><img src="./image/Logo.png"></a>
    <?php
    // Connexion à la base de données
    require_once 'MySQL/connection_bdd.php';

    // Récupérer les informations du formulaire de connexion
    $email = filter_var(mysqli_real_escape_string($conn, $_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_hash = password_hash($password, PASSWORD_ARGON2I); // Hasher le mot de passe
    
    // Requête SQL pour récupérer les informations de l'utilisateur
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Vérifier si l'utilisateur existe et si les informations de connexion sont correctes
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // Les informations de connexion sont correctes, connecter l'utilisateur
            session_start();
            
            // Supprimer le cookie de session en définissant une date d'expiration dans le passé
            if (isset($_COOKIE['session'])) {
                setcookie('session', '', time() - 3600, '/');
            }
            
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_is_admin'] = $user['is_admin'];

            // Redirection en fonction du rôle
            if ($user['is_admin'] == 1) {
                header('Location: index.php?role=admin'); // Rediriger l'administrateur vers la page d'accueil avec le rôle admin
                exit();
            } else {
                header('Location: index.php?role=user'); // Rediriger l'utilisateur vers la page d'accueil avec le rôle user
                exit();
            }
        } else {
            // Les informations de connexion sont incorrectes, afficher un message d'erreur
            echo '<div><h2>Mot de passe incorrect</h2><br><a class="error-message" href="javascript:history.go(-1)">Recommencer avec un mot de passe valide</a></div>';
        }
    } else {
        // L'utilisateur n'existe pas, afficher un message d'erreur
        echo '<div><h2>Email incorrect</h2><br><a class="error-message" href="javascript:history.go(-1)">Recommencer avec un email valide</a></div>';
    }

    $conn->close();
    ?>
</body>