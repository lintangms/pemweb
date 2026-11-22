<?php
/*
   LATIHAN 2 - File 4 dari 4: KELUAR (HAPUS SESSION)
   session_destroy() menghapus semua data session, lalu kembali ke Lat3_2a.php.
*/
session_start();
session_destroy();
header("location:Lat3_2a.php");
