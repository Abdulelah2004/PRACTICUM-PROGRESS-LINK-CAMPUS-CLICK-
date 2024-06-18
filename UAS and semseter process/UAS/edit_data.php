<?php
include "connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['process'])) {
    $student_id = $_GET['id'];
    $process = $_GET['process'];

    if ($process == 1) {
        $student_name = $_POST['name'];
        $major = $_POST['major'];

        $update_query = mysqli_query($koneksi, "UPDATE students SET student_name = '$student_name', program = '$major' WHERE id = '$student_id'")
            or die(mysqli_error($koneksi));

        if ($update_query) {
            echo "
                <script>
                    alert('Data Successfully Updated');
                    window.location.href='index.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Failed to Update Data');
                    window.location.href='index.php';
                </script>";
        }
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
