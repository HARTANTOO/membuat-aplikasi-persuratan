<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 align="center">Form Register</h2>
    <form action="proses_registrasi_form.php" method="POST" align="center">
        <label for="username">Nama Lengkap :</label>
        <input type="text" name="username" id="username" placeholder="username" autocomplete="off"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="password" autocomplete="off"><br>

        <input type="submit" name="simpan" value="simpan">
    </form>
</body>

</html>