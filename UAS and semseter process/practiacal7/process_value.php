


<?php
if (isset($_POST['process-button'])) {
    $npm = $_POST['npm'];
    $nilai = $_POST['nilai'];
    $repeat = $_POST['repeat'];
    $quality_letters = "";

    if (isset($nilai)) {
        if ($nilai >= 85) {
            $quality_letters = "A";
        } elseif ($nilai >= 75) {
            $quality_letters = "B";
        } elseif ($nilai >= 65) {
            $quality_letters= "C";
        } else {
            $quality_letters = "E";
        }

        echo $npm . " Your course grade is: " . $huruf_mutu . "<br>";
    }


    
    for ($i = 0; $i < $repeat; $i++) {
        echo $npm . " Your course grade is: " . $huruf_mutu . "<br>";
    }
}
?>
