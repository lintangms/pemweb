<?php
include_once("m_pengguna.php");
include_once("menteri.php");
include_once("kepalaDepartemen.php");

class c_auth {
    public $model;

    public function __construct() {
        $this->model = new m_pengguna();
    }

    public function login() {
        $pesan = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->model->cekLogin($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = array(
                    'nama' => $user['nama'],
                    'nim' => $user['nim'],
                    'jabatan' => $user['jabatan'],
                    'role' => $user['role']
                );
                header("Location: index.php");
                exit;
            }
            $pesan = "Username atau password salah";
        }
        include 'v_login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?hal=login");
        exit;
    }

    // membuat objek pengurus sesuai role yang sedang login
    public static function userAktif() {
        if (!isset($_SESSION['user'])) {
            return null;
        }
        $u = $_SESSION['user'];
        if ($u['role'] == 'kepala_departemen') {
            $obj = new kepalaDepartemen($u['nama']);
        } else {
            $obj = new menteri($u['nama']);
        }
        $obj->setNim($u['nim']);
        $obj->setJabatan($u['jabatan']);
        return $obj;
    }
}
