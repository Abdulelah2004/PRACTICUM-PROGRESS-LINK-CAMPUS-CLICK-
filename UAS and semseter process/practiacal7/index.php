<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdulelah 6th praticum Meeting</title>
</head>
<body>
    <form action="process_value.php" method="POST">
        <label>
            NPM: <input type="number" name="npm" required />
        </label>
        <br>
        <label>
            Grade: <input type="number" name="nilai" required />
        </label>
        <br>
        <label>
            Repeat: <input type="number" name="repeat" required />
        </label>
        <br>
        <button type="submit" name="process-button">Process Data</button>
    </form>
</body>
</html>
