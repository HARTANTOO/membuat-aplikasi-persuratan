<?php
    session_start();
    session_destroy();
    $_SESSION = [];
    echo " <script>
                alert('selamat berhasil login');
            </script>";
    header("Location:login.php");
?>