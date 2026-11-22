<?php
/*
   LATIHAN 3 - File 3 dari 3: TAMPILKAN LALU HAPUS SESSION
   Menampilkan isi session, setelah itu semua isi session dihapus.
   Kalau halaman ini di-refresh, data sudah tidak ada lagi.
*/
session_start();

if (isset($_SESSION["data"])) {
    $data = $_SESSION["data"];
    echo "Angka     : " . $data["angka"] . "<br>";
    echo "Faktorial : " . $data["faktorial"] . "<br>";
    echo "NIM       : " . $data["nim"] . "<br>";
    echo "Nama      : " . $data["nama"] . "<br>";
} else {
    echo "Tidak ada data di session.";
}

// hapus semua variabel session, lalu hancurkan session-nya
session_unset();
session_destroy();
