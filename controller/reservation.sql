-- Active: 1682432980794@@127.0.0.1@3306@test
CREATE DATABASE quaiavare;
USE quaiavare;
CREATE TABLE reservations (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    date DATE NOT NULL,
    hour TIME NOT NULL,
    count INT NOT NULL
);
