<?php
    include "koneksi.php";

    $query = mysqli_query($db, "SELECT * FROM student") or die(mysqli_error($db));