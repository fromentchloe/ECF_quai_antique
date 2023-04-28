<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$numPeople = $_POST['numPeople'];

$sql = "SELECT SUM(count) as total_count FROM reservations WHERE date = '$date' and '$time'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_count = $row['total_count'];

if ($total_count + $numPeople > 50) {
    echo "Désolé, nous sommes complets pour cette date.";
    exit;
}

// Insérer la réservation dans la base de données
$sql = "INSERT INTO reservations (name, date, hour, count) VALUES ('$name', '$date', '$time', '$numPeople')";
if ($conn->query($sql) === TRUE) {
    echo "Réservation effectuée avec succès !";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
