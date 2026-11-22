<?php
/*
   LATIHAN 5 - File 1 dari 3: FORM ORDER (NILAI TERAKHIR DIINGAT)
   Perubahan dari Latihan 4: file .html diganti .php.
   Isi kolom input diambil dari cookie. Jika cookie belum ada, isinya 0.
   Contoh: order CD 5 -> buka form lagi -> kolom CD berisi 5, bukan 0.
*/
// ambil nilai terakhir dari cookie; kalau belum ada pakai 0
$cd  = isset($_COOKIE['cd_order'])  ? (int)$_COOKIE['cd_order']  : 0;
$dvd = isset($_COOKIE['dvd_order']) ? (int)$_COOKIE['dvd_order'] : 0;
?>
<html>
  <head>
    <title>Order Form</title>
  </head>
  <body>
    <form action="Lat3_4b.php" method="post">
      <p> Order CD, amount:
        <input type="text" name="cd_order" value="<?php echo $cd; ?>" size="2"
               maxlength="2">
      </p>
      <p> Order DVD, amount:
        <input type="text" name="dvd_order" value="<?php echo $dvd; ?>" size="2"
               maxlength="2">
      </p>
      <input type="submit" value="Add To Cart" name="submit">
    </form>
  </body>
</html>
