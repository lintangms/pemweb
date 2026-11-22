<?php
include "menteri.php";

$m = new menteri("Budi Santoso");
$m->setNim("255150607111001");
$m->setAngkatan("2025");
$m->setJabatan("Menteri");
$m->setFoto("budi.jpg");

echo "Nama     : "; $m->getNama();     echo "<br>";
echo "NIM      : "; $m->getNim();      echo "<br>";
echo "Angkatan : "; $m->getAngkatan(); echo "<br>";
echo "Jabatan  : "; $m->getJabatan();  echo "<br>";
echo "Foto     : "; $m->getFoto();     echo "<br>";
