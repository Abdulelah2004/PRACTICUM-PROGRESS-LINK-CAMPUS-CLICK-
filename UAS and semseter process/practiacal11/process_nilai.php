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
