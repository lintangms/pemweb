<?php
/*
   LATIHAN 2 - File 2 dari 4: SIMPAN NAMA KE SESSION
   session_start() wajib ada di awal supaya session bisa dipakai.
   Nama dari form disimpan ke $_SESSION["nama"], lalu pindah ke Lat3_2c.php.
*/
session_start();
$_SESSION["nama"] = $_POST["nama"] ?? "";
header("location:Lat3_2c.php");
