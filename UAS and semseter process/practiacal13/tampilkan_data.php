<?php
    include "koneksi.php";

    $query = mysqli_query($db, "SELECT * FROM mahasiswa") or die(mysqli_error($db));