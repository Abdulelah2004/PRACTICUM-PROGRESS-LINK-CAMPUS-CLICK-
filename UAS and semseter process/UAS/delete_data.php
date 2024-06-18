<?php
include "connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = $_GET['id'];

    $delete_query = mysqli_query($koneksi, "DELETE FROM students WHERE id = $student_id") 
        or die(mysqli_error($koneksi));

    if ($delete_query) {
        echo "
            <script>
                alert('Data Successfully Deleted');
                window.location.href = 'index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Failed to Delete Data');
                window.location.href = 'index.php';
            </script>";
    }
} else {
    echo "
        <script>
            alert('Invalid Request');
            window.location.href = 'index.php';
        </script>";
}
?>
