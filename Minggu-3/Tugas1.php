<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 1</title>
</head>
<body>
<h1> Tugas Faktorial </h1>
<?php
function faktorial($a){
	if($a == 1) {
			return 1;
	} else {
			return $a * faktorial($a-1);
	}
}
?>
<form method="post" action="">
	Masukkan Angka : <input type="number" name="nilai">
	<input type="submit" name="submit">
</form>
<?php
if (isset($_POST["submit"]))
	{
	$bil = $_POST["nilai"];
	$hasil = faktorial($bil);
	echo "Hasil : ";
	echo $hasil;
}
?>
</body>
</html>
