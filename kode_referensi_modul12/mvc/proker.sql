CREATE DATABASE IF NOT EXISTS praktikumWeb;
USE praktikumWeb;

CREATE TABLE IF NOT EXISTS proker (
    nomorProgram INT AUTO_INCREMENT PRIMARY KEY,
    namaProgram VARCHAR(255),
    suratKeterangan VARCHAR(100)
);

INSERT INTO proker (namaProgram, suratKeterangan) VALUES
('Seminar Teknologi Informasi', 'SK-001/BEM/2026'),
('Pelatihan Web Dasar', 'SK-002/BEM/2026'),
('Lomba Karya Mahasiswa', 'SK-003/BEM/2026');
