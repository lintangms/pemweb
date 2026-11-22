<?php
/*
   LATIHAN 6 - File 5 dari 6: SIMPAN ORDER (HARUS LOGIN)
   Sama seperti Latihan 5, tapi dijaga oleh cek_login.php.
*/
include "cek_login.php";

if (isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    setcookie("cd_order", (int)$_POST['cd_order']);
    setcookie("dvd_order", (int)$_POST['dvd_order']);
    header("Location: Lat3_4c.php");
    exit;
}
