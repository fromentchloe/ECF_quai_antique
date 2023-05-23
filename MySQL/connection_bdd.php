<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quaiavare";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['	ble5mmo2o5v9oouq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['yaqgmhaawa2mofqz'];
$password = $dbparts['iakckq5tsei51ap0'];
$database = ltrim($dbparts['c2ltqnyl5eus2goc'],'/');
   
    $conn_dist = mysqli_connect($hostname, $username, $password, $database );

if (!$conn_dist) {
    die("Erreur de connexion à la base de données en ligne : " . mysqli_connect_error());
}




// Exemple : Sélectionnez des données depuis la base de données locale
$localQuery = "SELECT * FROM table_name";
$localResult = mysqli_query($localConn, $localQuery);

if ($localResult) {
    // Traitez les données locales ici
}

// Exemple : Sélectionnez des données depuis la base de données en ligne
$remoteQuery = "SELECT * FROM table_name";
$remoteResult = mysqli_query($remoteConn, $remoteQuery);

if ($remoteResult) {
    // Traitez les données en ligne ici
}

// N'oubliez pas de fermer les connexions lorsque vous avez terminé
mysqli_close($localConn);
mysqli_close($remoteConn);
?>
}
?>




<?php
// Connexion à la base de données locale "quaiavare"
$localHost = 'localhost';
$localUsername = 'username';
$localPassword = 'password';
$localDatabase = 'quaiavare';

$localConn = new mysqli($localHost, $localUsername, $localPassword, $localDatabase);

if ($localConn->connect_error) {
    die("Erreur de connexion à la base de données locale : " . $localConn->connect_error);
}

// Connexion à la base de données en ligne "jawdb" sur Heroku
$remoteHost = 'your-heroku-host';
$remoteUsername = 'your-heroku-username';
$remotePassword = 'your-heroku-password';
$remotePort = 'your-heroku-port';
$remoteDatabase = 'jawdb';

$remoteConn = new mysqli($remoteHost, $remoteUsername, $remotePassword, $remoteDatabase, $remotePort);

if ($remoteConn->connect_error) {
    die("Erreur de connexion à la base de données en ligne : " . $remoteConn->connect_error);
}

// Vous avez maintenant deux connexions établies : $localConn pour la base de données locale "quaiavare"
// et $remoteConn pour la base de données en ligne "jawdb" sur Heroku.

// Vous pouvez exécuter des requêtes SQL et effectuer des opérations avec les deux connexions selon vos besoins.

// Exemple : Sélectionnez des données depuis la base de données locale
$localQuery = "SELECT * FROM table_name";
$localResult = $localConn->query($localQuery);

if ($localResult) {
    // Traitez les données locales ici
}

// Exemple : Sélectionnez des données depuis la base de données en ligne
$remoteQuery = "SELECT * FROM table_name";
$remoteResult = $remoteConn->query($remoteQuery);

if ($remoteResult) {
    // Traitez les données en ligne ici
}

// N'oubliez pas de fermer les connexions lorsque vous avez terminé
$localConn->close();
$remoteConn->close();
?>

