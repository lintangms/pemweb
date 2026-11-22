<?php
/*
   LATIHAN 5 - Buku tamu, file 2 dari 3: SIMPAN KE FILE
   Mengambil nama dan komentar dari form, lalu menyimpannya ke guestbook.txt.
   Format satu baris: nama;komentar
   FILE_APPEND = data ditambah di bawah (tidak menimpa data lama).
   LOCK_EX     = file dikunci saat ditulis agar tidak bentrok.
*/
$nama = trim($_POST['nama'] ?? '');
$komentar = trim($_POST['komentar'] ?? '');

// tanda ; dan baris baru dibuang supaya format file tidak rusak
$nama = str_replace([";", "\r", "\n"], " ", $nama);
$komentar = str_replace([";", "\r", "\n"], " ", $komentar);

if ($nama !== '' && $komentar !== '') {
    $baris = $nama . ";" . $komentar . "\n";
    file_put_contents("guestbook.txt", $baris, FILE_APPEND | LOCK_EX);
}

// setelah disimpan, pindah ke halaman yang menampilkan isi buku tamu
header("Location: latihan5_tampil.php");
exit;
