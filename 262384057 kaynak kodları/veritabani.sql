/*Veritabanı oluşturmak için kullanılan kodlar*/
CREATE DATABASE IF NOT EXISTS insaat_db;
USE insaat_db;

CREATE TABLE IF NOT EXISTS mesajlar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(100) NOT NULL,
    telefon VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mesaj TEXT NOT NULL,
    tarih TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
