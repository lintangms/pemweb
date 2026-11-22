<?php
/*
   LATIHAN 1 - File 1: MEMBUAT COOKIE
   Membuat cookie bernama "user" berisi "Alex Porter".
   time()+3600 = cookie berlaku 1 jam dari sekarang.
   Jalankan file ini dulu di browser, baru jalankan baca_cookie.php.
*/
setcookie("user", "Alex Porter", time() + 3600);
echo "Cookie user sudah dibuat. Sekarang buka baca_cookie.php";
