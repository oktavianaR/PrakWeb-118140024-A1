<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
	<?php
		function hargabet($nama, $warna="red"){
			$jumlahnama = strlen($nama);
			if($jumlahnama >20){
				$harga = 700;
			} elseif ($jumlahnama >10) {
				$harga = 500;
			} elseif ($jumlahnama >0) {
				$harga = 300;
			} else {
				$harga = 0;
			}
			$jumlahharga = $jumlahnama * $harga;
			echo '<font color="'.$warna.'">Nama : ';
			echo $nama;
			echo "<br>";
			echo 'Harga Total : Rp. ';
			echo $jumlahharga;
			echo "</font>";
		}
	?>
<h1>Menghitung Harga Bet</h1>
<form method="post" action="">
	Masukkan Nama : <input type="text" name="nama"><br>
	Masukkan Warna : <input type="text" name="warna" value="red"><br>
	<input type="submit" name="submit">
</form>
<br>
<?php
	if(isset($_POST['submit']))
	{
		$nama  = $_POST['nama'];
		$warna = $_POST['warna'];
		hargabet($nama,$warna);
	}
?>
</body>
</html>
