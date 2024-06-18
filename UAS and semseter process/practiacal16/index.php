<?php

if (isset($_GET["inputan_pertama"])) {
    $input1 = $_GET["inputan_pertama"];
    echo htmlspecialchars($input1);
}

?>

<html>
<head>
    <title>Meeting 6</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="inputan_pertama" placeholder="Enter anything hahahah">
    <button type="submit" name="proses_data">PROCESS DATA</button>
</form>
</body>
</html>
