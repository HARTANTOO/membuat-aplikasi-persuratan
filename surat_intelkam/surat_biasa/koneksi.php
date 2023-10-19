<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "restrojp";

//buat koneksi
$konek = mysqli_connect($server, $username, $password, $database);

if(!$konek) {
    die ("koneksi gagal: ". mysqli_connect_error());
}

//echo "koneksi berhasil";
mysqli_close($konek);
?>