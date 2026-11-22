
<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$mysqli = new mysqli(
    'localhost',
    'root',
    '',
    'praktikumWeb'
);

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("CALL SP_Login(?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$rs = $stmt->get_result();
$row = $rs->fetch_object();

if ($row) {
    header("Location: Lat5_1.php");
    exit;
} else {
    echo "Data tidak terdaftar";
    echo '<br><a href="formlogin.html">Kembali ke Login</a>';
}

$stmt->close();
$mysqli->close();
?>
