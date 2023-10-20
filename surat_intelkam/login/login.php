<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>

    <?php //data yang dikembalikan ketika terjadi kesalahan melalui url
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "login gagal ! username dan password dalah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "anda telah berhasil login";
        } else if ($_GET['pesan'] == "belum login") {
            echo "anda harus login untuk mengakses halaman admin";
        }
        echo " <script>
                alert('selamat berhasil login');
            </script>";
    }
    ?>

    <h2 align="center">login</h2>
    <form action="proses_login.php" method="POST" align="center">
        <tabel for="">
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" id="username"></td><br>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" id="password"></td><br>
            </tr><br>
            <input type="submit" name="login" value="submit">
            </tr>
            <p>Anda belum punya akun, silahkan daftar <a href="registrasi_login.php">disini!</a></p>
        </tabel>
    </form>
</body>

</html>