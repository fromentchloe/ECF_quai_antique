<body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="../index.php"><img src="./image/Logo.png"></a>
    <?php 
      require "./connection_bdd.php";
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $numPeople = $_POST['numPeople'];
    $currentDate = date('Y-m-d');

    $sql = "SELECT SUM(count) as total_count FROM reservations WHERE hour = '$time'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_count = $row['total_count'];
    if ($total_count + $numPeople > 10) {
        echo '<h2>Désolé, nous sommes complets pour cette heure-là.</h2><br>
        <a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Page précédente</a></div>';
        echo '<br><br><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Changer d\'heure</a></div>';
    } else {
        $sql = "SELECT SUM(count) as total_count FROM reservations WHERE date = '$date'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $total_count = $row['total_count'];
        if ($total_count + $numPeople >= 90) {
            echo '<h2>Désolé, nous sommes complets pour ce jour-là.</h2><br>
            <a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Page précédente</a></div>';
            echo '<br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)"></a></div>';
        } else {
            if ($date < $currentDate) {
                echo '<h2>La date saisie est antérieure à la date actuelle. Veuillez sélectionner une date valide</h2><br>';
                echo '<a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="index.php">Page précédente</a></div>';
            } else {
                $sql = "INSERT INTO reservations (name, date, hour, count) VALUES ('$name', '$date', '$time', '$numPeople')";
                if ($conn->query($sql) === TRUE) {
                    $date = strftime('%d/%m/%Y', strtotime($date));
                    echo '<h2>Réservation enregistrée au nom de ' . $name . ', nous vous attendons le ' . $date . ' à ' . $time . '</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Page Précédente</a></div>';
                } else {
                    echo "Erreur: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }
    ?>
    </body>
    </html>
    