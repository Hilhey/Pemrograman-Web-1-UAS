CREATE DATABASE IF NOT EXISTS BD;
USE BD;

CREATE TABLE IF NOT EXISTS produk_mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_produk VARCHAR(100) NOT NULL,
  kategori VARCHAR(60) NOT NULL,
  harga INT NOT NULL,
  deskripsi TEXT NOT NULL
);

INSERT INTO produk_mahasiswa (nama_produk, kategori, harga, deskripsi) VALUES
('Starter Kit Desain', 'Digital', 150000, 'Paket template Canva, icon, dan panduan branding.'),
('Audio Intro Podcast', 'Audio', 80000, 'Sound FX dan jingle profesional untuk podcast.'),
('Mockup UI Mobile', 'UI/UX', 120000, 'Komponen UI siap pakai untuk aplikasi mobile.');
