<?php
/*
   LATIHAN 4 - Menulis file dengan mode 'a'
   Mode 'a' = append. Isi lama file TIDAK dihapus, data baru ditambah di bawahnya.
   Jalankan setelah Latihan 3. Isi testFile.txt jadi:
      Bobby Bopper
      Tracy Tanner
      New Stuff 1
      New Stuff 2
*/
$myFile = "testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);

// TAMBAHAN (tidak ada di modul): tampilkan isi file supaya mudah di-screenshot
echo nl2br(file_get_contents($myFile));
