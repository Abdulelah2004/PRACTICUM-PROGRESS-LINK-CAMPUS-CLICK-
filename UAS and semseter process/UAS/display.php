<?php
include "connection.php";

$proses = mysqli_query($koneksi, "SELECT * FROM students") 
    or die(mysqli_error($koneksi));
?>
