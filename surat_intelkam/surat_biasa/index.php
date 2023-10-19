<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Surat Masuk Biasa</title>
</head>
<body>

    <!-- memeriksa pesan yang dikirim dari login -->
    <?php
        
    
    ?>

    <h2>Surat Masuk Biasa</h2>
    <br>
    <form action="index.php" method="POST">
        <label for="">Cari :</label>
            <input type="text" name="cari" value="" placeholder="silahkan ketik disini">
            <input type="submit" value="cari">
    </form>
    <?php
        if(isset($_POST['cari'])){
            $cari=$_POST['cari'];
            echo "<b>Hasil pencaria : ".$cari."</b>";
        }
    ?>
    <br><br>
    <a href="tambah_surat.php">Tambah Surat Masuk</a>
    <br><br>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Id_Surat</th>
        <th>Nomor Urut</th>
        <th>Tgl_masuk</th>
        <th>No_Surat</th>
        <th>Lamp</th>
        <th>Dari</th>
        <th>No_Sium</th>
        <th>Perihal</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    <?php 
    include 'koneksi.php';
    
    
        //$query = mysqli_query (mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa WHERE id_surat LIKE '%".$cari."%'");
    //}else{

    //}
        if(isset($_POST['cari'])){
            $cari=$_POST['cari'];
            $query = mysqli_query (mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa WHERE 
            nomor LIKE '%".$cari."%' OR 
            tgl_msk LIKE '%".$cari."%' OR
            dari LIKE '%".$cari."%' OR
            no_sium LIKE '%".$cari."%'
            "); 
       }else{
            
        $query = mysqli_query (mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa"); //dr connect dan database
        
                
        }
    
        $no = 1;
    while($ambil = mysqli_fetch_array($query)){ //ambil ini variabel bkn sendiri
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $ambil['id_surat']; ?></td> <!-- penjabaran dr while -->
            <td><?php echo $ambil['nomor']; ?></td>
            <td><?php echo $ambil['tgl_msk']; ?></td>
            <td><?php echo $ambil['no_surat']; ?></td>
            <td><?php echo $ambil['lampiran']; ?></td>
            <td><?php echo $ambil['dari']; ?></td>
            <td><?php echo $ambil['no_sium']; ?></td>
            <td><?php echo $ambil['perihal']; ?></td>
            <td><?php echo $ambil['keterangan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $ambil['id_surat']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $ambil['id_surat']; ?>">Hapus</a>
            </td>
        </tr>

    <?php
    }
    ?>



    </table>
</body>
</html>