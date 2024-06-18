<?php 
    $studentName = "Abdulelah";
    $myName = "Ahmed";
    $gender = NULL;

    if ($studentName == "Abdulelah") {
        $gender = "Male";
    } else {
        $gender = "Female";
    }
    echo $studentName . " Welcome, <br>I am " . $myName;
?>

<html>
    <body>
        <h1>This is <?php echo $studentName ?></h1>
        <h2>I am <?php echo $gender ?></h2>
    </body>
</html>
