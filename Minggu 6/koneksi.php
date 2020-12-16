<?php
$host="localhost";
$user="root";
$password="";
$db1="tugas_ajax";

$kon = mysqli_connect($host, $user, $password, $db1);
if(!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>