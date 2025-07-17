CREATE DATABASE kedai_kopi;
USE kedai_kopi;

-- Tabel user
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Tabel produk kopi
CREATE TABLE produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  harga INT,
  deskripsi TEXT
);

-- Insert sample user
INSERT INTO users (username, password) VALUES
('admin', MD5('admin123'));

-- Insert sample produk
INSERT INTO produk (nama, harga, deskripsi) VALUES
('Espresso', 15000, 'Kopi hitam pekat khas Italia'),
('Cappuccino', 20000, 'Kopi susu dengan foam'),
('Latte', 18000, 'Kopi susu lembut dan creamy'),
('Americano', 16000, 'Espresso dengan air panas');
