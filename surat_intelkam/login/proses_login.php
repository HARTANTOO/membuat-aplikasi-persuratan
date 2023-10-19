<?php
 #   session_start();
 #   include '../surat_biasa/koneksi.php';

//jika ditekan tombol login
#if(isset($_POST['login'])){
    //tangkap data dari form 
#    $username= $_POST['username'];
#    $password= $_POST['password'];
 
#    $hasil = mysqli_query(mysqli_connect($server, $username, $password, $database),"select * from admin where username='$username' and password='$password'");


#    if(mysqli_num_rows($hasil)===1){ //cek username
#        $row = mysqli_fetch_assoc($hasil); //cek password form sama apa tdk dengan yang di DB
#       if(password_verify($password, $row["password"])){
#            $_SESSION["username"] = true;
#           header("location:../dashboard/dashboard_surat.php");
           # exit;
#        }else{
#        	header("location:login.php?pesan=gagal");

#    }
#    $error = true;
#}
#}
?>


<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include "../surat_biasa/koneksi.php";
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query(mysqli_connect($server, $username, $password, $database),"select * from admin where username='$username' and password='$password'");

 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../dashboard/dashboard_surat.php");
    
}else{
	header("location:login.php?pesan=gagal");
}
?>
