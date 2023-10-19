<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    
    $id_surat = mysqli_real_escape_string (mysqli_connect($server, $username, $password, $database), $_POST['id_surat']);
    $nomor = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['no_urut']);
    $tgl_msk = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['tgl_msk']);
    $no_surat = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['no_surat']);
    $lampiran = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['lampiran']);
    $dari = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['dari']);
    $no_sium = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['no_sium']);
    $perihal = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['perihal']);
    $keterangan = mysqli_real_escape_string(mysqli_connect($server, $username, $password, $database), $_POST['keterangan']);

    $simpan=mysqli_query (mysqli_connect($server, $username, $password, $database), "INSERT INTO surat_biasa VALUE ('$id_surat','$nomor','$tgl_msk','$no_surat','$lampiran','$dari','$no_sium','$perihal','$keterangan')");
    
    if('simpan'){
        echo 'koneksi berhasil';
    }
    header("location:index.php");
}

    
?>
