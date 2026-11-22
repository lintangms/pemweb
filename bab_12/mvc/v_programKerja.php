<html>
<head>
    <title>Daftar Program Kerja BEM</title>
</head>
<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1" cellpadding="5">
        <tr>
            <td>No</td>
            <td>Nama Program Kerja</td>
            <td>Surat Keterangan</td>
        </tr>
        <?php
        foreach ($proker as $p) {
            echo "<tr>",
                 "<td>" . $p['nomorProgram'] . "</td>",
                 "<td>" . $p['namaProgram'] . "</td>",
                 "<td>" . $p['suratKeterangan'] . "</td>",
                 "</tr>";
        }
        ?>
    </table>
</body>
</html>
