<?php
include_once "pengurusBEM.php";

class menteri extends pengurusBEM {
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bolehKelola() {
        return false;
    }
}
