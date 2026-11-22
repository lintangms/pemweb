<html>
<head>
    <title>Daftar Program Kerja BEM</title>
</head>
<body>
    <p>
        Login sebagai: <b><?php echo htmlspecialchars($user->nama); ?></b>
        (<?php $user->getJabatan(); ?>) |
        <a href="index.php?hal=logout">Logout</a>
    </p>

    <h2>Daftar Program Kerja BEM</h2>

    <?php if ($boleh) { ?>
        <a href="index.php?aksi=tambah">+ Tambah Program Kerja</a><br><br>
    <?php } ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Program Kerja</th>
            <th>Surat Keterangan</th>
            <?php if ($boleh) { echo "<th>Aksi</th>"; } ?>
        </tr>
        <?php foreach ($proker as $p) { ?>
        <tr>
            <td><?php echo $p['nomorProgram']; ?></td>
            <td><?php echo htmlspecialchars($p['namaProgram']); ?></td>
            <td><?php echo htmlspecialchars($p['suratKeterangan']); ?></td>
            <?php if ($boleh) { ?>
            <td>
                <a href="index.php?aksi=ubah&id=<?php echo $p['nomorProgram']; ?>">Ubah</a> |
                <a href="index.php?aksi=hapus&id=<?php echo $p['nomorProgram']; ?>"
                   onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
