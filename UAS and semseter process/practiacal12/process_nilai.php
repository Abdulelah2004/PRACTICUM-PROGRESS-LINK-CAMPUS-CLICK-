<?php
include "koneksi.php"; // Include database connection

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    // You have $repeat variable, but it's not used in the insert query

    // Insert data into database
    $query = mysqli_query($db, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) 
            VALUES ('$nama_mhs', '$prodi_mhs') ")
        or die(mysqli_error($db)); // Handle query error

    // Check if insertion was successful
    if ($query) {
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Data Gagal Disimpan');
                window.location.href='index.php';
            </script>";
    }
} else {
    // If the request method is not POST, redirect to index.php
    header("Location: index.php");
    exit;
}
?>
