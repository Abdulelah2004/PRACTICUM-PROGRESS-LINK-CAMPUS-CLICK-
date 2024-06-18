<?php
include "koneksi.php"; // Include database connection

// Ensure 'id' parameter exists and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $npm = $_GET['id'];

    // Prepare and bind the DELETE statement
    $stmt = mysqli_prepare($db, "DELETE FROM mahasiswa WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $npm);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Check if delete operation was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    window.location.href = 'index.php';
                </script>";
        } else {
            echo "
                <script>
                    alert('Data Gagal Dihapus');
                    window.location.href = 'index.php';
                </script>";
        }
    } else {
        // Handle execution error
        echo "
            <script>
                alert('Error: " . mysqli_stmt_error($stmt) . "');
                window.location.href = 'index.php';
            </script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($db);
} else {
    // Redirect to index.php if 'id' parameter is missing or not numeric
    echo "
        <script>
            alert('Invalid Request');
            window.location.href = 'index.php';
        </script>";
}
?>
