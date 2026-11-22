
<?php
include "koneksi.php";

if (empty($_POST['e'])) {
    mysqli_query(
        $koneksi,
        "INSERT INTO user (username, password, level)
         VALUES (
            '{$_POST['username']}',
            '{$_POST['password']}',
            '{$_POST['level']}'
         )"
    );
} else {
    mysqli_query(
        $koneksi,
        "UPDATE user
         SET password = '{$_POST['password']}',
             level = '{$_POST['level']}'
         WHERE username = '{$_POST['e']}'"
    );
}

header("Location: Lat5_1.php");
exit;
?>
