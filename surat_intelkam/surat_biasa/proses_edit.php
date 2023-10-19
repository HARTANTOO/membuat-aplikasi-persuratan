<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    //Cek apakah data berhasil diubah atau tidak
   // if ($_POST > 0){
       // echo "
       //     <script>
         //       alert('data berhasil diubah!');
         //       document.location.href='index.php';
            
         //   </script>
      //  ";
   // }else {
       // echo "
       //     <script>
         //       alert('data gagal diupdate');
        //        document.location.href='index.php';
     //       </script>
      //  ";
   // }

    $id_surat = $_POST['id_surat'];
    $nomor = $_POST['nomor'];
    $tgl_msk = $_POST['tgl_msk'];
    $no_surat =  $_POST['no_surat'];
    $lampiran = $_POST['lampiran'];
    $dari =  $_POST['dari'];
    $no_sium = $_POST['no_sium'];
    $perihal =  $_POST['perihal'];
    $keterangan = $_POST['keterangan'];

    //$result = mysqli_query(mysqli_connect($server, $username, $password, $database), 
    
    //$simpan="UPDATE surat_biasa SET 
      //  id_surat='$id_surat',
      //  nomor = '$nomor',
       // tgl_msk = '$tgl_msk',
      //  no_surat = '$no_surat',
       // lampiran = '$lampiran',
      //  dari = '$dari',
      //  no_sium = '$no_sium',
      //  perihal = '$perihal',
      //  keterangan = '$keterangan' 
      //  WHERE id_surat=$id_surat'";

    $hasil=mysqli_query(mysqli_connect($server, $username, $password, $database),"UPDATE surat_biasa SET 
    id_surat='$id_surat',
    nomor = '$nomor',
    tgl_msk = '$tgl_msk',
    no_surat = '$no_surat',
    lampiran = '$lampiran',
    dari = '$dari',
    no_sium = '$no_sium',
    perihal = '$perihal',
    keterangan = '$keterangan' 
    WHERE id_surat='$id_surat'");
   
//$result = mysqli_query(mysqli_connect($server, $username, $password, $database), $simpan);
    
    //$simpan=mysqli_query (mysqli_connect($server, $username, $password, $database), "UPDATE surat_biasa SET
      //  id_surat='$id_surat',
        //nomor = '$no_urut',
       // tgl_msk = '$tgl_msk',
       // no_surat = '$no_surat',
       // lampiran = '$lampiran',
      //  dari = '$dari',
      //  no_sium = '$no_sium',
      //  perihal = '$perihal',
      //  keterangan = '$keterangan' WHERE id=$id");

    
    if('simpan'){
        echo 'koneksi berhasil';
    
        header("location:index.php");
    }

}
    
?>
<script>
                alert('data berhasil diubah!');
                document.location.href='index.php';
            
</script>";
