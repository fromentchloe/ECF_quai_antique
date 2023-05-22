<?php 
$servername = getenv('	n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
$username = getenv('p0vgmuoauk538bk1');
$password = getenv('vzb3f0z66b3252cs');
$dbname = getenv('d9ujfqoevkamlvp7');

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
