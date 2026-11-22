<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h2><?php echo $judul; ?></h2>
    <form method="post">
        <input type="hidden" name="nomorProgram" value="<?php echo $data['nomorProgram']; ?>">
        <table>
            <tr>
                <td>Nama Program</td>
                <td><input type="text" name="namaProgram" maxlength="255"
                           value="<?php echo htmlspecialchars($data['namaProgram']); ?>" required></td>
            </tr>
            <tr>
                <td>Surat Keterangan</td>
                <td><input type="text" name="suratKeterangan" maxlength="100"
                           value="<?php echo htmlspecialchars($data['suratKeterangan']); ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"> <a href="index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
