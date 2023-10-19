<?php
   # include '../surat_biasa/koneksi.php';
   # session_start();

   # if(!isset($_SESSION["login"])){
   #     header("location: ../login/login.php")
   # }

?>

<?php 
#	session_start();
#	if($_SESSION['status']!="login"){
#		header("location:login.php?pesan=belum_login");
#	}

?>

<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:../login/login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard surat</title>
</head>
<body>
    <h2>Home Persuratan</h2>
    
    <ul>
        <li><a href="../surat_biasa/index.php">Surat Biasa</a></li>
    </ul>
    
    <ul>
        <li><a href="">Surat Rahasia</a></li>
    </ul>
    <ul>
        <li><a href="../login/logout.php">Logout</a></li>
    </ul>
</body>
</html>