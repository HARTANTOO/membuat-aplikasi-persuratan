<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah surat</title>
</head>
<body>
    <?php
    //buat koneksi
     include 'koneksi.php';
    //ambil id yang di lempar dari index.php
    $id = $_GET['id'];
    //ambil data dari database   
    $query = "SELECT * FROM surat_biasa WHERE id_surat = $id";
    $result = mysqli_query(mysqli_connect($server, $username, $password, $database), $query);
    //merubah format variable $get
   $row=mysqli_fetch_array($result);
    ?>

    <H1 align="center">Selamat datang di ubah data</H1>
<br><br>
<form action="proses_edit.php" method="POST">
    <table align="center">
        <tr>
            <td>Id Surat : </td>
            <td><input type="text" name="id_surat" size="15" maxlength="15" required value="<?php echo $row['id_surat'];?>"></td>
        </tr>
        <tr>
            <td>No urut surat :</td>
            <td><input type="text" name="nomor" size="15" maxlength="15" required value="<?php echo $row["nomor"];?>"></td>
        </tr>
        <tr>
            <td>Tgl Masuk :</td>
            <td><input type="date" name="tgl_msk" size="15" maxlength="15" required value="<?php echo $row['tgl_msk'];?>"></td>
        </tr>
        <tr>
            <td>No Surat :</td>
            <td><input type="text" name="no_surat" size="25" maxlength="50" required value="<?= $row['no_surat'];?>"></td>
        </tr>
        <tr>
            <td>Lampiran :</td>
            <td><input type="text" name="lampiran" size="15" maxlength="15" required value="<?= $row['lampiran'];?>"></td>
        </tr>
        <tr>
            <td>Surat Dari</td>
            <td><input type="text" name="dari" size="15" maxlength="50" required value="<?= $row['dari'];?>"></td>
        </tr>
        <tr>
            <td>No Sium</td>
            <td><input type="text" name="no_sium" size="15" maxlength="15" required value="<?= $row['no_sium'] ;?>"></td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td><input type="text" name="perihal" size="15" maxlength="100" required value="<?= $row['perihal'] ;?>"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" size="15" maxlength="15" required value="<?= $row['keterangan'] ;?>"></td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="simpan" value="update">
            <input type="reset" name="reset" value="batal"> 
            </td>
        </tr>
    </table>
</form>
    <?php
    //}
    ?>
</body>
</html>