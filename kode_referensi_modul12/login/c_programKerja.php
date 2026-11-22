<?php
include_once("m_programKerja.php");
include_once("c_auth.php");

class c_programKerja {
    public $model;

    public function __construct() {
        $this->model = new m_programKerja();
    }

    public function invoke() {
        $user = c_auth::userAktif();
        if ($user == null) {
            header("Location: index.php?hal=login");
            exit;
        }

        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'daftar';
        $boleh = $user->bolehKelola();

        // Menteri hanya boleh melihat daftar
        if ($aksi != 'daftar' && !$boleh) {
            http_response_code(403);
            die("Akses ditolak: hanya Kepala Departemen yang boleh mengelola program kerja.");
        }

        if ($aksi == 'tambah') {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->model->tambah($_POST['namaProgram'], $_POST['suratKeterangan']);
                header("Location: index.php");
                exit;
            }
            $judul = "Tambah Program Kerja";
            $data = array('nomorProgram' => '', 'namaProgram' => '', 'suratKeterangan' => '');
            include 'v_form.php';
        } elseif ($aksi == 'ubah') {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->model->ubah($_POST['nomorProgram'], $_POST['namaProgram'], $_POST['suratKeterangan']);
                header("Location: index.php");
                exit;
            }
            $judul = "Ubah Program Kerja";
            $data = $this->model->getById($_GET['id']);
            include 'v_form.php';
        } elseif ($aksi == 'hapus') {
            $this->model->hapus($_GET['id']);
            header("Location: index.php");
            exit;
        } else {
            $proker = $this->model->getSemua();
            include 'v_programKerja.php';
        }
    }
}
