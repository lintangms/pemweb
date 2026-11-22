<?php
/*
   LATIHAN 1a - Membaca file dengan fread() sebanyak 5 karakter
   Kode ini membuka testFile.txt, membaca 5 karakter pertama, lalu menampilkannya.
   Hasil yang tampil: Fakul
   Catatan: kalau isi testFile.txt sudah berubah (setelah Latihan 3 dan 4),
   salin ulang isi dari testFile_asli.txt ke testFile.txt.
*/
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));   // baca sebanyak ukuran file
fclose($fh);
echo $theData;
