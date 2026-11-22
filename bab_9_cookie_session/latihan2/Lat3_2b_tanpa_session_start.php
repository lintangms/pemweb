<?php
/*
   LATIHAN 2 - PERCOBAAN: Lat3_2b TANPA session_start()
   Dipakai untuk soal: "hapus baris session_start() di Lat3_2b".
   Cara pakai: ubah action di Lat3_2a.php menjadi Lat3_2b_tanpa_session_start.php
   Hasil: halaman Lat3_2c menampilkan "Maaf, anda belum memasukkan nama"
   karena nama tidak benar-benar tersimpan di session.
*/
// session_start();   <-- baris ini sengaja dihapus
$_SESSION["nama"] = $_POST["nama"] ?? "";
header("location:Lat3_2c.php");
