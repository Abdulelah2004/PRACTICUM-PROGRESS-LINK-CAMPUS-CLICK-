
<?php

// Abdulelah Ahmed
if (isset($_POST['process-button'])) {
    $npm = $_POST['npm']; 
    $nilai = $_POST['nilai'];
    $repeat = $_POST['repeat'];
    $grade_letter = "";

    if (isset($nilai)) {
        if ($nilai >= 85) {
            $grade_letter = "A";
        } elseif ($nilai >= 75) {
            $grade_letter = "B";
        } elseif ($nilai >= 65) {
            $grade_letter = "C";
        } else {
            $grade_letter = "E";
        }

        echo $npm . " Your course grade is: " . $grade_letter . "<br>";
    }

    for ($i = 0; $i < $repeat; $i++) {
        echo $npm . " Your course grade is: " . $grade_letter . "<br>";
    }
}
?>
