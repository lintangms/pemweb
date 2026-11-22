<?php
/*
   LATIHAN 1 - File 2: MEMBACA COOKIE
   Menampilkan isi cookie "user" dari browser.
   Hasil yang tampil: Alex Porter
   Setelah komputer di-restart, cookie masih ada selama belum lewat 1 jam.
*/
if (isset($_COOKIE["user"])) {
    echo $_COOKIE["user"];
} else {
    echo "Cookie user tidak ditemukan (belum dibuat atau sudah kedaluwarsa)";
}
