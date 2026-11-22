<?php
/*
   LATIHAN 6 - FUNGSI LOGOUT
   Menghapus semua data session (user dan password), lalu kembali ke login.php.
   Setelah logout, membuka Lat3_4a.php akan diarahkan lagi ke halaman login.
*/
session_start();
session_unset();      // hapus semua variabel session
session_destroy();    // hancurkan session-nya
header("Location: login.php");
exit;
