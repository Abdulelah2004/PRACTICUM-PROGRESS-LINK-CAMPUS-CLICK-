<?php

include "connection.php";

$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$repeat = $_POST['ulangi'];

$query = mysqli_query($db, "INSERT INTO student (Student_name, prodi) 
            VALUES ('$nama_mhs','$prodi_mhs')")
        or die(mysqli_error($db));

if ($query) {
    echo "<script>alert('Data successfully saved')</script>";
} else {
    echo "<script>alert('Failed to save data')</script>";
}

?>
