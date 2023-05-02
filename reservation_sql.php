<!DOCTYPE html>
<html>
  <head>
    <title>Le Quai Antique</title>
    <meta charset="UTF-8">
  </head>
  <body style="background-color: #e6ccb2; color: #7f5539; text-align: center"> 
    <a href="./index.php"><img src="./style/image/Logo.png"></a>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quaiavare";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $numPeople = $_POST['numPeople'];

    $sql = "SELECT SUM(count) as total_count FROM reservations WHERE date = '$date' and hour = '$time'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_count = $row['total_count'];

    if ($total_count + $numPeople > 7) {
        echo '<h2>Désolé, nous sommes complets pour cette heure là .</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour à la page d\'accueil</a></div>';
        echo '<br><br><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Changer d\'heure</a></div>';
        exit;
    }
    // Insérer la réservation dans la base de données
    $sql = "INSERT INTO reservations (name, date, hour, count) VALUES ('$name', '$date', '$time', '$numPeople')";
    if ($conn->query($sql) === TRUE) {
        $date = strftime('%d/%m/%Y', strtotime($date));
        echo '<h2>Réservation enregistrée au nom de ' . $name . ' nous vous attendons le ' . $date . ' à ' . $time . '</h2><br><a style="background-color: #7f5539; color: #e6ccb2; border-radius: 20px; padding: 10px 20px; font-size: 25px; cursor: pointer; text-decoration:none" href="javascript:history.go(-1)">Retour à la page d\'accueil</a></div>';
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
    ?>

  </body>
</html>
