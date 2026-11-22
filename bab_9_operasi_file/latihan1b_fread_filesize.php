<?php
/*
   LATIHAN 1b - fread() dengan filesize()
   Sama seperti 1a, tapi jumlah karakter yang dibaca = ukuran file,
   jadi seluruh isi file terbaca.
   Hasil yang tampil: Fakultas Ilmu Komputer Universitas Brawijaya
   (di browser, baris baru terlihat seperti spasi biasa).
*/
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));   // baca sebanyak ukuran file
fclose($fh);
echo $theData;
