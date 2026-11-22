USE praktikumWeb;

CREATE TABLE IF NOT EXISTS pengguna (
    nim VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100),
    angkatan VARCHAR(4),
    jabatan VARCHAR(50),
    foto VARCHAR(100),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('menteri','kepala_departemen')
);

INSERT INTO pengguna VALUES
('255150607111001', 'Budi Santoso', '2025', 'Menteri', 'budi.jpg', 'menteri', '$2y$10$xvGyNbANOXPzAIIMUlyIVelK.AMna0VNqWuUhJoa3h1MIsCiTI1VW', 'menteri'),
('255150607111002', 'Siti Aminah', '2025', 'Kepala Departemen', 'siti.jpg', 'kadep', '$2y$10$oBpAXRrA5NC9lNCSQlNYreABlH6iFQ5tVXIG0rxEEPo6BllShW7QC', 'kepala_departemen');
