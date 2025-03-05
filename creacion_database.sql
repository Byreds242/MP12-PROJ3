CREATE DATABASE IF NOT EXISTS e_commerce;

USE e_commerce;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
);

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imagen VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL
);

USE e_commerce;

INSERT INTO productos (imagen, nombre, precio) 
VALUES ('ruta/de/la/imagen.jpg', 'Nombre del Producto', 19.99);

