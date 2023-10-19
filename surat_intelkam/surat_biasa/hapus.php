<?php
    //koneksi
    include 'koneksi.php';

    //tangkap id di urt
    $id = $_GET['id'];

    //load data yang akan dihapus berdasarkan id_surat

    $query = "DELETE FROM surat_biasa WHERE id_surat = $id";
    $result = mysqli_query(mysqli_connect($server, $username, $password, $database), $query);

    //perulangan gagal atau terhapus
    header('location:index.php');

?>

<!-- <script>
                alert('data berhasil diubah!');
                document.location.href='index.php';
            
            </script> -->
