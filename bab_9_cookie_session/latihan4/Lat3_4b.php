<?php
/*
   LATIHAN 4 - File 2 dari 3: SIMPAN ORDER KE COOKIE
   Jumlah order CD dan DVD disimpan ke dua cookie, lalu pindah ke Lat3_4c.php.
   Cookie tanpa waktu kedaluwarsa akan hilang saat browser ditutup.
*/
if (isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    setcookie("cd_order", $_POST['cd_order']);
    setcookie("dvd_order", $_POST['dvd_order']);
    header("Location: Lat3_4c.php");
    exit;
}
