<html>
<head>
    <title>Daftar Program Kerja BEM</title>
</head>
<body>
    <h2>Daftar Program Kerja BEM</h2>
    <a href="index.php?aksi=tambah">+ Tambah Program Kerja</a>
    <br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Program Kerja</th>
            <th>Surat Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($proker as $p) { ?>
        <tr>
            <td><?php echo $p['nomorProgram']; ?></td>
            <td><?php echo htmlspecialchars($p['namaProgram']); ?></td>
            <td><?php echo htmlspecialchars($p['suratKeterangan']); ?></td>
            <td>
                <a href="index.php?aksi=ubah&id=<?php echo $p['nomorProgram']; ?>">Ubah</a> |
                <a href="index.php?aksi=hapus&id=<?php echo $p['nomorProgram']; ?>"
                   onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
