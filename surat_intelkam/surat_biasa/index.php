<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Surat Masuk Biasa</title>
</head>

<body>
    <!--logika pagination-->
    <?php



    //looping data
    ?>


    <h2>Surat Masuk Biasa</h2>
    <br>
    <p>logout klik <a href="../dashboard/dashboard_surat.php">disini</a></p>
    <form action="index.php" method="POST">
        <label for="">Cari :</label>
        <input type="text" name="cari" value="" placeholder="silahkan ketik disini">
        <input type="submit" value="cari">
    </form>
    <?php
    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
        echo "<b>Hasil pencaria : " . $cari . "</b>";
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

        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $query = mysqli_query(mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa WHERE 
            nomor LIKE '%" . $cari . "%' OR 
            tgl_msk LIKE '%" . $cari . "%' OR
            dari LIKE '%" . $cari . "%' OR
            no_sium LIKE '%" . $cari . "%'
            ");
        } else {

            $query = mysqli_query(mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa"); //dr connect dan database


        }

        //baris untuk pagination
        //menyimpan url halaman saat ini dengan fungsi get
        //misalnya kalian akan melihat ?halaman=3 pada url diatas maka 3 akan di simpan di var  halaman
        $halaman = isset($_GET['halaman > 1']) ? (int) $_GET['halaman'] : 1;

        //jika halaman lebih dari 1 maka halaman awal dikurangi 1 misal 5 - 1
        //jika halaman lebih kecil dari 1 maka halaman diawali dari 0
        $halaman_awal = ($halaman > 1) ? ($halaman * 3) - 3 : 0;

        //include koneksi database

        //jika previous dikurangi 1 dan jika next ditambah 1
        $sebelum = $halaman - 1;
        $setelah = $halaman + 1;

        //mengambil data dari tabel pegawai untuk ditotal
        #$query = mysqli_query(mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa");


        //jumlah surat ditotal dengan fungsi num_rows
        $jumlah_data = mysqli_num_rows($query);

        //pembulatan halaman menggunakan ceil
        $total_halaman = ceil($jumlah_data / 10);

        //query ambil data dari tabel surat untuk ditampilkan dgn fungsi limit
        //satu halaman akan ditampilkan 5 data
        $query = mysqli_query(mysqli_connect($server, $username, $password, $database), "SELECT * FROM surat_biasa limit $halaman_awal, 10");

        //nomor digunakan untuk penomoran pada kolom no
        //karena index dimulai dari angka 0 maka perlu ditambahkan 1
        $nomor = $halaman_awal + 1;

        $no = 1;
        while ($ambil = mysqli_fetch_array($query)) { //ambil ini variabel bkn sendiri
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

    <!--bagian pagination-->
    <ul>
        <li>
            <a <?php if ($halaman > 1) {
                    echo " href='?halaman=$sebelum'";
                } ?>>Previous</a>
        </li>
        <li><a href="?halaman=<?php $nomor; ?>"><?php echo $nomor; ?></a></li>
        <li>
            <a <?php if ($halaman < $total_halaman) {
                    echo " href='?halaman=$setelah'";
                } ?>>Next</a>
        </li>
    </ul>


</body>

</html>