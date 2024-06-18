<?php
    include "tampilkan_data.php";
    $data_edit = isset($_GET['id']) ? mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM mahasiswa WHERE id = " . $_GET['id'])) : null;

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap-responsive.min.css" media="screen">
    <link rel="stylesheet" href="/library/assets/styles.css" media="screen">
    <script src="/library/vendors/modernizr-2.6.2-respond-1.1.0.min.js" defer></script>
    <title>6th</title>
</head>
<body>
<div class="span9" id="content">
    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Input Nilai Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="<?php echo isset($data_edit['id']) ? 'edit_data.php?id=' . $data_edit['id'] . '&proses=1' : 'process_nilai.php'; ?>" method="POST">
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="nama">NAMA MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="nama" name="nama" value="<?php echo isset($data_edit['nama_mahasiswa']) ? $data_edit['nama_mahasiswa'] : ''; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="<?php echo isset($data_edit['prodi']) ? $data_edit['prodi'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Data Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>NPM Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi Mahasiswa</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM mahasiswa");
                        while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['nama_mahasiswa'] ?></td>
                                <td><?php echo $data['prodi'] ?></td>
                                <td>
                                    <a href="index.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                    <a href="hapus_data.php?id=<?php echo $data['id']; ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>