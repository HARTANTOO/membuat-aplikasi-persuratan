<?php
session_start();
include "../surat_biasa/koneksi.php";

if (isset($_POST['registrasi'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $simpan = mysqli_query(
        mysqli_connect($server, $username, $password, $database),
        "INSERT INTO admin (username, password) VALUE ('$username', '$password')"
    );

    //konfirmasi berhasil apa tidak
    if ($simpan) {
        echo "registrasi berhasil";
        header('location: login.php');
        exit;
    } else {
        echo "registrasi gagal";
        exit;
    }
}

//jika tombol di tekan
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 align="center">Form Register</h2>
    <form action="" method="POST" align="center">
        <label for="username">Nama Lengkap :</label>
        <input type="text" name="username" id="username" placeholder="username" autocomplete="off"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="password" autocomplete="off"><br>

        <input type="submit" name="registrasi" value="simpan">
    </form>
</body>

</html>