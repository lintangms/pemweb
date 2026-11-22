<?php

require_once "koneksiMVC.php";

class m_programKerja {
    public function getSemua() {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker ORDER BY nomorProgram");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getById($nomor) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM proker WHERE nomorProgram = ?");
        $stmt->bind_param("i", $nomor);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function tambah($nama, $surat) {
        global $mysqli;
        $stmt = $mysqli->prepare("INSERT INTO proker (namaProgram, suratKeterangan) VALUES (?, ?)");
        $stmt->bind_param("ss", $nama, $surat);
        return $stmt->execute();
    }

    public function ubah($nomor, $nama, $surat) {
        global $mysqli;
        $stmt = $mysqli->prepare("UPDATE proker SET namaProgram = ?, suratKeterangan = ? WHERE nomorProgram = ?");
        $stmt->bind_param("ssi", $nama, $surat, $nomor);
        return $stmt->execute();
    }

    public function hapus($nomor) {
        global $mysqli;
        $stmt = $mysqli->prepare("DELETE FROM proker WHERE nomorProgram = ?");
        $stmt->bind_param("i", $nomor);
        return $stmt->execute();
    }
}
