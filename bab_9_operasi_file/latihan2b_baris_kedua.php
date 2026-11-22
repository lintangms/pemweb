<?php
/*
   LATIHAN 2b - Menampilkan baris kedua
   fgets() dipanggil dua kali. Panggilan pertama membaca baris 1,
   panggilan kedua membaca baris 2. Yang ditampilkan hanya baris 2.
   Hasil yang tampil: Universitas Brawijaya
*/
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
fgets($fh);                         // baris 1 dibaca, tapi tidak ditampilkan
$theData = fgets($fh);              // baris 2 disimpan ke variabel
fclose($fh);
echo $theData;
