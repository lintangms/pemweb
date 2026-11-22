<?php
/*
   LATIHAN 3 - Menulis file dengan mode 'w'
   Mode 'w' = write. Isi lama file dihapus, lalu diganti dengan isi baru.
   PERHATIAN: setelah file ini dijalankan, isi testFile.txt jadi:
      Bobby Bopper
      Tracy Tanner
*/
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);

// TAMBAHAN (tidak ada di modul): tampilkan isi file supaya mudah di-screenshot
echo nl2br(file_get_contents($myFile));
