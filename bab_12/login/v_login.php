<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Sistem Program Kerja BEM</h2>
    <?php if ($pesan != "") { echo "<p style='color:red'>$pesan</p>"; } ?>
    <form method="post" action="index.php?hal=login">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
