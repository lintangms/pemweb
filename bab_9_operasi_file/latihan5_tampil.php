<?php
/*
   LATIHAN 5 - Buku tamu, file 3 dari 3: TAMPILKAN ISI FILE
   Membaca guestbook.txt, lalu memecah tiap baris dengan explode(";")
   menjadi dua bagian: nama dan komentar.
*/
$isi = file_get_contents("guestbook.txt");
$daftarBaris = explode("\n", $isi);        // pecah per baris
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Isi Buku Tamu</title>
</head>
<body>
  <h2>Isi Buku Tamu</h2>
  <table border="1" cellpadding="6" cellspacing="0">
    <tr><th>No</th><th>Nama</th><th>Komentar</th></tr>
    <?php
    $no = 1;
    foreach ($daftarBaris as $baris) {
        if (trim($baris) === '') continue;       // lewati baris kosong
        $data = explode(";", $baris);            // pecah dengan pemisah ;
        $nama = $data[0];
        $komentar = $data[1] ?? '';
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . htmlspecialchars($nama) . "</td>";
        echo "<td>" . htmlspecialchars($komentar) . "</td>";
        echo "</tr>";
    }
    ?>
  </table>
  <p><a href="latihan5_form.php">Tulis komentar lagi</a></p>
</body>
</html>
