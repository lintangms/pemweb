
<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda: <b>" . htmlspecialchars($nama) . "</b>";
}
?>
