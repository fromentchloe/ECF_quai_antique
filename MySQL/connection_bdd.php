<?php
if (getenv('JAWSDB_URL') !== false) {
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    
    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quaiavare";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

$sqlFile = "../quaiantique.sql";

$sqlContent = file_get_contents($sqlFile);

if (mysqli_multi_query($conn, $sqlContent)) {
    echo "Le fichier SQL a été exécuté avec succès.";
} else {
    echo "Erreur lors de l'exécution du fichier SQL : " . mysqli_error($conn);
}
?>
