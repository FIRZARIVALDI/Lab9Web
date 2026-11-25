CREATE DATABASE IF NOT EXISTS db_latihan CHARACTER SET utf8mb4;
USE db_latihan;
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO users (nama, email) VALUES ('Rina','rina@contoh.id'),('Budi','budi@contoh.id');
