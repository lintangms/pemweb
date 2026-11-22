<?php
/*
   LATIHAN 6 - File 2 dari 6: PROSES LOGIN
   Mencocokkan username dan password dengan user terdaftar (admin / admin).
   Jika cocok -> user dan password disimpan di session, lalu ke halaman order.
   Jika salah -> kembali ke login.php dengan pesan error.
*/
session_start();

$user = $_POST["user"] ?? "";
$password = $_POST["password"] ?? "";

if ($user === "admin" && $password === "admin") {
    $_SESSION["user"] = $user;
    $_SESSION["password"] = $password;
    header("Location: Lat3_4a.php");
} else {
    header("Location: login.php?error=1");
}
exit;
