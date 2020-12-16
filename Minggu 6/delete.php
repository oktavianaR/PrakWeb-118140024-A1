<?php
include 'koneksi.php';

$nim = $_POST['id'];

$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

$hasil = mysqli_query($kon, $sql);
?>