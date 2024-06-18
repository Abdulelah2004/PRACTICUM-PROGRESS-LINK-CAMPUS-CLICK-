<?php
include "connection.php";

$result = null;
$data_edit = null;

if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($koneksi, $_GET['search']); 
    $query = "SELECT * FROM students WHERE student_name LIKE '%$search%' OR program LIKE '%$search%' OR id LIKE '%$search%'";
} else {
    $query = "SELECT * FROM students";
}

$result = mysqli_query($koneksi, $query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_edit = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM students WHERE id = $id"));
}
?>

<html>
<head>
    <title>Student Database</title>
    <link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="/library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<div class="span9" id="content">
    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Input Student Data</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="<?php echo isset($data_edit['id']) ? 'edit_data.php?id=' . $data_edit['id'] . '&process=1' : 'process.php'; ?>" method="POST">
                        <fieldset>
                            <legend>Input Student Data</legend>

                            <div class="control-group">
                                <label class="control-label" for="name">Student Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="name" name="name" value="<?php echo isset($data_edit['student_name']) ? $data_edit['student_name'] : ''; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="program">Student Program</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="program" name="major" value="<?php echo isset($data_edit['program']) ? $data_edit['program'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                <div class="muted pull-left">Student Data</div>
                <form action="index.php" method="get" class="pull-right">
                    <label class="muted" for="search">Search: </label>
                    <input type="text" name="search" id="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                    <input type="submit" value="Search" class="btn">
                </form>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Student Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['student_name']; ?></td>
                                <td><?php echo $data['program']; ?></td>
                                <td>
                                    <a href="index.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                    <a href="delete_data.php?id=<?php echo $data['id']; ?>">Delete</a>
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
