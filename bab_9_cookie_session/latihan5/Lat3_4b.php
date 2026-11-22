<?php
/*
   LATIHAN 5 - File 2 dari 3: SIMPAN ORDER KE COOKIE
   Sama seperti Latihan 4. Nilai diubah jadi angka (int) agar aman.
*/
if (isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    setcookie("cd_order", (int)$_POST['cd_order']);
    setcookie("dvd_order", (int)$_POST['dvd_order']);
    header("Location: Lat3_4c.php");
    exit;
}
