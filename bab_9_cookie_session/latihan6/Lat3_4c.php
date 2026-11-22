<?php
/*
   LATIHAN 6 - File 6 dari 6: RINGKASAN ORDER (HARUS LOGIN)
   Sama seperti Latihan 5, tapi dijaga oleh cek_login.php, ditambah link Logout.
*/
include "cek_login.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order Form</title>
  </head>
  <body>
    <p>Login sebagai: <b><?php echo htmlspecialchars($_SESSION["user"]); ?></b>
       | <a href="logout.php">Logout</a></p>
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
