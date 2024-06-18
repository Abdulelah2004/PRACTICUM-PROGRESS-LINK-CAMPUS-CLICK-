<?php
    include "koneksi.php";

    $npm = $_GET['id'];

    $query = mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $npm") or die(mysqli_error($db));

    if($db){
        echo"
            <script>
                alert('Data Berhasil Dihapus')
                window.location.href='index.php'
            </script>";
    } else echo"
            <script>
                alert('Data Gagal Dihapus')
                window.location.href='index.php'
            </script>";
