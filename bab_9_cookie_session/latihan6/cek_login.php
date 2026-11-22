<?php
/*
   LATIHAN 6 - File 3 dari 6: PENJAGA HALAMAN (dipanggil oleh halaman order)
   File ini di-include di awal Lat3_4a.php, Lat3_4b.php, dan Lat3_4c.php.
   Jika session user/password tidak ada -> dikembalikan ke halaman login.
*/
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["password"])) {
    header("Location: login.php?harus_login=1");
    exit;
}
