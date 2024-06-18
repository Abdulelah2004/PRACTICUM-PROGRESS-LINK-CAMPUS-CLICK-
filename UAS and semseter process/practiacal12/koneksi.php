<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "Abdulelah's web";

$db = new mysqli($host, $username, $password, $database);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
