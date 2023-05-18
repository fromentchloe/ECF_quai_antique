<body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="../index.php"><img src="../image/Logo.png"></a>
    <?php 
        require "./connection_bdd.php";
        $name = $_POST['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $found = false;
        $numPeople = $_POST['numPeople'];
        $allergy = $_POST['allergy'];
        $currentDate = date('Y-m-d');

        $maxReservation = ($time === 'midi') ? 55 : 55;
        $totalCountToday = 0;

        // Calcul du nombre total de réservations pour la journée actuelle
        $sql = "SELECT SUM(count) as total_count FROM reservations WHERE date = '$date'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row['total_count'] !== null) {
            $totalCountToday = $row['total_count'];
        }

        if ($totalCountToday + $numPeople > 110) {
            echo '<h2>Désolé, nous sommes complets pour ce jour-là.</h2><br>';
            echo '<a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour a la Page d\'acceuil </a></div>';
            exit();
        }

        // Calcul du nombre total de réservations pour l'heure sélectionnée et la date
        $sql = "SELECT SUM(count) as total_count FROM reservations WHERE date = '$date' AND hour = '$time'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $total_count = $row['total_count'];

        if ($total_count + $numPeople > $maxReservation) {
            echo '<h2>Désolé, Nous sommes complets a cette période essayer le soir </h2><br>';
            echo '<a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour a la Page d\'acceuil </a></div>';
            exit();
        }

        if ($total_count + $numPeople > 55) {
            echo '<h2>Désolé, nous sommes complets pour cette heure-là.</h2><br>';
            echo '<a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour a la Page d\'acceuil </a></div>';
           
        } else {
            if ($date < $currentDate) {
                echo '<h2>La date saisie est antérieure à la date actuelle. Veuillez sélectionner une date valide</h2><br>';
                echo '<a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour a la Page d\'acceuil </a></div>';
            } else {
                $sql = "INSERT INTO reservations (name, date, hour, count, allergy) VALUES ('$name', '$date', '$time', '$numPeople', '$allergy' )";
                if ($conn->query($sql) === TRUE) {
                    $date = strftime('%d/%m/%Y', strtotime($date));
                    echo '<h2>Réservation enregistrée au nom de ' . $name . ', nous vous attendons le ' . $date . ' à ' . $time . '</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Page Précédente</a></div>';
                } else {
                    echo "Erreur: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    ?>
</body>
</html>
