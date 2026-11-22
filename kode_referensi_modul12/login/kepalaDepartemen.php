<?php
include_once "pengurusBEM.php";

class kepalaDepartemen extends pengurusBEM {
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bolehKelola() {
        return true;
    }
}
