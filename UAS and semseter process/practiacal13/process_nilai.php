<?php

include "koneksi.php";

    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    $repeat = $_POST['ulangi'];

    $query = mysqli_query($db, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) 
                VALUES ('$nama_mhs','$prodi_mhs') ")
    or die(mysqli_error($db));

    if($db){
        echo"
            <script>
                alert('Data Berhasil Disimpan')
                window.location.href='index.php'
            </script>";
    } else echo"
            <script>
                alert('Data Gagal Disimpan')
                window.location.href='index.php'
            </script>";

