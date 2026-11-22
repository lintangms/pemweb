<?php
/*
   LATIHAN 2a - Membaca satu baris dengan fgets()
   fgets() membaca satu baris saja, dari awal sampai tanda baris baru.
   Hasil yang tampil: Fakultas Ilmu Komputer
*/

$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');

fgets($fh);
$theData = fgets($fh);

fclose($fh);
echo $theData;
?>
