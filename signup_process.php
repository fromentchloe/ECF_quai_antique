<body style=" text-align: center; background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="./index.php"><img src="./image/Logo.png"></a>
    <?php
        // if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on'){
        //  header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        //  exit;
        //}
    
    
        // Connexion à la base de données
    require_once './MySQL/connection_bdd.php';

    // Récupération des informations du formulaire et nettoyage des données
    $name = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name'])));
    $email = filter_var(mysqli_real_escape_string($conn, $_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = (mysqli_real_escape_string($conn, $_POST['password']));
    $password_hash = password_hash($password, PASSWORD_ARGON2I); // Hasher le mot de passe
    $retype_password = (mysqli_real_escape_string($conn, $_POST['retype_password']));
    $allergies = (mysqli_real_escape_string($conn, $_POST['allergies']));
    $code_restaurant = trim(mysqli_real_escape_string($conn, $_POST['code_restaurant']));


    // Vérification que les deux mots de passe sont identiques
    if($password != $retype_password) {
        echo '<div><h2>Les deux mots de passe ne correspondent pas. Veuillez recommencer.</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour</a></div>';
        exit(); // Arrêter l'exécution du script
    }
    

    // Vérifier si l'utilisateur existe déjà en base de données
    $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $count);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($count > 0) {
        echo '<div><h2>Un compte existe déjà à l\'adresse ' . $email . '</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Mot de passe oublié</a></div>';
    } else {
        // Vérification si l'utilisateur est administrateur
        $code_restaurant = mysqli_real_escape_string($conn, $_POST['code_restaurant']);
        $is_admin = ($code_restaurant == '2023$1582') ? true : false;

        // Requête SQL pour insérer un nouvel utilisateur dans la base de données
        $stmt = mysqli_prepare($conn, "INSERT INTO users (name, email, password, allergy, is_admin) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $password_hash, $allergies, $is_admin);
        if (mysqli_stmt_execute($stmt)) {
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

?></body>
