<?php
/*
   LATIHAN 5 - File 3 dari 3: RINGKASAN ORDER + LINK UBAH ORDER
   Sama seperti Latihan 4, ditambah link "Ubah order" kembali ke Lat3_4a.php.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order Form</title>
  </head>
  <body>
    <p><u>Order Summary</u></p>
    <?php
      $num_cd_order = $_COOKIE['cd_order'] ?? 0;
      $num_dvd_order = $_COOKIE['dvd_order'] ?? 0;
      echo "Ordered CD: ".$num_cd_order." pieces <br>";
      echo "Ordered DVD: ".$num_dvd_order." pieces <br>";
    ?>
    <p><a href="Lat3_4a.php">Ubah order</a></p>
  </body>
</html>
