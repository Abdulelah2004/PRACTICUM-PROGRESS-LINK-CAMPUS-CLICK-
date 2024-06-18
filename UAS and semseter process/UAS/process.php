<?php
include "connection.php";

if (isset($_POST['name']) && isset($_POST['major'])) {
    $student_name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $major = mysqli_real_escape_string($koneksi, $_POST['major']);

    $insert_query = mysqli_query($koneksi, "INSERT INTO students (student_name, program) VALUES ('$student_name','$major')")
        or die(mysqli_error($koneksi));

    if ($insert_query) {
        echo "
            <script>
                alert('Data Successfully Saved');
                window.location.href='index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Failed to Save Data');
                window.location.href='index.php';
            </script>";
    }
} else {
    echo "
        <script>
            alert('Invalid Request: Data incomplete');
            window.location.href='index.php';
        </script>";
}
?>
