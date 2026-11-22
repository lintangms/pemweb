<?php
/*
   LATIHAN 3 - File 2 dari 3: HITUNG FAKTORIAL + SIMPAN KE SESSION
   1. Mengambil angka dari form.
   2. Menghitung faktorial dengan fungsi faktorial().
   3. Menampilkan angka dan hasil faktorialnya.
   4. Menyimpan array (angka, faktorial, NIM, nama) ke dalam session.
   5. Ada link ke Lat3_3c.php.
   Batas angka 0 sampai 20 karena lebih dari 20 hasilnya terlalu besar untuk integer PHP.
*/
session_start();

// fungsi menghitung faktorial: n! = n x (n-1) x ... x 1
function faktorial($n) {
    $hasil = 1;
    for ($i = 2; $i <= $n; $i++) {
        $hasil = $hasil * $i;
    }
    return $hasil;
}

$angka = $_POST["angka"] ?? "";

if ($angka === "" || !ctype_digit($angka) || (int)$angka > 20) {
    echo "Masukkan angka bulat antara 0 sampai 20. <a href='Lat3_3a.php'>Kembali</a>";
    exit;
}

$angka = (int)$angka;
$hasil = faktorial($angka);

echo "Angka yang dimasukkan: " . $angka . "<br>";
echo "Faktorial dari " . $angka . " adalah: " . $hasil . "<br><br>";

// array berisi angka, hasil faktorial, NIM, dan nama
$data = [
    "angka"     => $angka,
    "faktorial" => $hasil,
    "nim"       => "255150607111009",
    "nama"      => "Lintang Muhammad Shiddiq"
];

// simpan array ke dalam session
$_SESSION["data"] = $data;

echo "<a href='Lat3_3c.php'>Lihat data di session</a>";
