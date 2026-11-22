<?php
// sesuaikan username dan password
$mysqli = new mysqli('localhost', 'root', '', 'praktikumWeb');

if ($mysqli->connect_errno) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
