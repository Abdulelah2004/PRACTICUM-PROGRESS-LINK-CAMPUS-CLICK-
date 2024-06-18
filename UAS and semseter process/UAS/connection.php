<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Abdulelah_final";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
