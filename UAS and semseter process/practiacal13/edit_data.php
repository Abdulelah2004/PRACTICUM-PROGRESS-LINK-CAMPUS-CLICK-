<?php
    include "koneksi.php";

    $npm = $_GET['id'];
    $process_checker = $_GET['proses'];

    $process_get = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id = '".$npm."'")
    or die(mysqli_error($db));

    if ($process_checker == 1) {
        $nm_mhs = $_POST['nama'];
        $prodi_mhs = $_POST['prodi'];

        $proses_update_data = mysqli_query($db, "UPDATE mahasiswa SET nama_mahasiswa = '$nm_mhs', prodi = '$prodi_mhs' WHERE id = '$npm'")
        or die(mysqli_error($db));

        if ($proses_update_data) {
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
    }
