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
                    <form action="process_nilai.php" method="POST">
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="nama">NAMA MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="nama" name="nama" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="ulangi">ULANGI</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="ulangi" name="ulangi" value="">
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
                            <th>ID</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi Mahasiswa</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // Include database connection and query to fetch data
                        include "koneksi.php";
                        $query = mysqli_query($db, "SELECT * FROM mahasiswa") or die(mysqli_error($db));

                        // Loop through fetched data and display in table rows
                        while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['nama_mahasiswa']; ?></td>
                                <td><?php echo $data['prodi']; ?></td>
                                <td>
                                    <a href="edit_data.php?id=<?php echo $data['id']; ?>">Edit</a> |
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
