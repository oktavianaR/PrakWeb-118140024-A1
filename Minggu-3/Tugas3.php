<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 3</title>
</head>
<?php
	$koneksi = mysqli_connect("localhost","root","","PrakPemWeb");
?>
<body>
<h1>Data Mahasiswa</h1>
<h2>======================================</h2>
<h2>Tambah Data Baru</h2>
<form method="post" action="">
	Masukkan NIM : <input type="number" name="nim"><br>
	Masukkan Nama : <input type="text" name="nama"><br>
	Masukkan Alamat : <textarea name="alamat" cols="20" rows="2"></textarea><br>
	Masukkan Jurusan : <select name="jurusan">
				<option value="IF">Teknik Informatika</option>
				<option value="TK">Teknik Kelauatan</option>
				<option value="PWK">Perencanaan Wilayah Kota</option>
				<option value="TF">Teknik Fisika</option>
			</select>
			<br>
	<input type="submit" name="submit" value="TambahData">
</form>
<?php
if (isset($_POST["submit"]))
{ if($_POST["submit"] == "TambahData"){
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$ID_Jur = $_POST["jurusan"];
	$Nama_Jur = "select nama from jurusan where ID_Jur = '$ID_Jur'";
	$carijurusan = mysqli_query($koneksi, $Nama_Jur);
	$datajurusan = mysqli_fetch_array($carijurusan);
	echo "NIM : $nim <br>";
	echo "Nama : $nama <br>";
	echo "Alamat : $alamat <br>";
	echo "Jurusan : "; 
	echo $datajurusan['nama'];
	echo "<br>";
	$sql="insert into mahasiswa VALUES ('$nim','$nama','$alamat','$ID_Jur')";
	$hasil=mysqli_query($koneksi, $sql) or die('Tidak bisa menyimpan atau Data sudah ada <a href =Tugas_1.php>Kembali</a>');
	echo "Berhasil di Simpan";
	echo '<a href ="Tugas_1.php">Kembali</a>';
	}
}
?>
<br>
<h2>======================================</h2>
<h2>Cari Data</h2>
<form method="post" action="">
	Masukkan Nama : <input type="text" name="nama">
	<input type="submit" name="submit" value="CariData">
</form>
<?php
if (isset($_POST["submit"]))
{ if($_POST["submit"] == "CariData"){
	$nama = $_POST["nama"];
	$carinama = mysqli_query($koneksi, "select * from mahasiswa where nama = '$nama'");
	$data = mysqli_fetch_array($carinama) or die ("Data tidak ada <a href =Tugas_1.php>Kembali</a>");
	$ID_Jur = $data['ID_Jur'];
	$Nama_Jur = "select nama from jurusan where ID_Jur = '$ID_Jur'";
	$carijurusan = mysqli_query($koneksi, $Nama_Jur);
	$datajurusan = mysqli_fetch_array($carijurusan);
	echo "Data ditemukan <a href =Tugas_1.php>Kembali</a>";
	echo "<br>";
	echo "NIM : ";
	echo $data['nim'];
	echo "<br>";
	echo "Nama : ";
	echo $data['nama'];
	echo "<br>";
	echo "Alamat : ";
	echo $data['alamat'];
	echo "<br>";
	echo "Jurusan : "; 
	echo $datajurusan['nama'];
	}
}
?>
<br>
<h2>======================================</h2>
<h2>Hapus Data</h2>
<form method="post" action="">
	Masukkan NIM : <input type="text" name="nim">
	<input type="submit" name="submit" value="HapusData">
</form>
<?php
if (isset($_POST["submit"]))
{ if($_POST["submit"] == "HapusData"){
	$nim = $_POST["nim"];
	$carinrp = mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
	$data = mysqli_fetch_array($carinrp) or die ("Data tidak ada <a href =Tugas_1.php>Kembali</a>");
	$ID_Jur = $data['ID_Jur'];
	$Nama_Jur = "select nama from jurusan where ID_Jur = '$ID_Jur'";
	$carijurusan = mysqli_query($koneksi, $Nama_Jur);
	$datajurusan = mysqli_fetch_array($carijurusan);
	echo "NIM : ";
	echo $data['nim'];
	echo "<br>";
	echo "Nama : ";
	echo $data['nama'];
	echo "<br>";
	echo "Alamat : ";
	echo $data['alamat'];
	echo "<br>";
	echo "Jurusan : "; 
	echo $datajurusan['nama'];
	echo "<br>";
	$hapusdata = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim'");
	echo "Data sukses dihapus <a href =Tugas_1.php>Kembali</a>";
	}
}
?>
<br>
<h2>======================================</h2>

</body>
</html>
