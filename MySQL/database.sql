CREATE DATABASE quaiavare;
USE quaiavare ;
CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password_hash CHAR(60) NOT NULL,
  is_admin BOOLEAN NOT NULL DEFAULT FALSE
);
CREATE TABLE reservations (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
date DATE NOT NULL,
hour TIME NOT NULL,
count INT UNSIGNED NOT NULL
);




