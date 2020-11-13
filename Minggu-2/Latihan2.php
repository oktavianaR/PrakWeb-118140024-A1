<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 Mengurutkan Data</title>
</head>
<body>
<?php
    $data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    sort($data);
    foreach ($data as $hasil) {
        echo $hasil.' ';
    }
?>
</body>
</html>