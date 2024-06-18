<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap-responsive.min.css" media="screen">
    <link rel="stylesheet" href="/library/assets/styles.css" media="screen">
    <script src="/library/vendors/modernizr-2.6.2-respond-1.1.0.min.js" defer></script>
    <title>6th Meeting</title>
</head>
<body>

<div class="span9" id="content">
    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Student Grade Input</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="process_nilai.php" method="POST">
                        <fieldset>
                            <legend>Student Grade Input</legend>

                            <div class="control-group">
                                <label class="control-label" for="name">Student Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="name" name="nama" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="program">Student Program</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="program" name="prodi" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="repeat">Repeat</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="repeat" name="ulangi" value="">
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
</div>
</body>
</html>
