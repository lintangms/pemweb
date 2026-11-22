<!--
   LATIHAN 5 - Buku tamu (guestbook), file 1 dari 3: FORM
   Form berisi nama dan komentar. Data dikirim ke latihan5_simpan.php.
   Ada link untuk melihat isi buku tamu (latihan5_tampil.php).
-->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Buku Tamu</title>
</head>
<body>
  <h2>Buku Tamu</h2>
  <form method="post" action="latihan5_simpan.php">
    <p>Nama:<br>
      <input type="text" name="nama" required></p>
    <p>Komentar:<br>
      <textarea name="komentar" rows="4" cols="40" required></textarea></p>
    <input type="submit" value="Kirim">
  </form>
  <p><a href="latihan5_tampil.php">Lihat isi buku tamu</a></p>
</body>
</html>
