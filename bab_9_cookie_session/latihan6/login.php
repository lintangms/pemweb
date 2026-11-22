<?php
/*
   LATIHAN 6 - File 1 dari 6: HALAMAN LOGIN
   Form login. User terdaftar: username admin, password admin.
   Data dikirim ke proses_login.php. Jika sudah login, langsung ke halaman order.
*/
session_start();
if (isset($_SESSION["user"])) {
    header("Location: Lat3_4a.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <?php if (isset($_GET["error"])) { echo "<p>Username atau password salah.</p>"; } ?>
  <?php if (isset($_GET["harus_login"])) { echo "<p>Silakan login dulu untuk melakukan order.</p>"; } ?>
  <form method="post" action="proses_login.php">
    <p>Username:<br><input type="text" name="user" required></p>
    <p>Password:<br><input type="password" name="password" required></p>
    <input type="submit" value="Login">
  </form>
</body>
</html>
