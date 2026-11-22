<?php

require_once "koneksiMVC.php";

class m_pengguna {
    public function cekLogin($username, $password) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM pengguna WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
