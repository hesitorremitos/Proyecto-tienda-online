DROP DATABASE IF EXISTS tienda_online;

CREATE DATABASE tienda_online;
USE tienda_online;

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT,
    imagen VARCHAR(500),
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

INSERT INTO categorias (nombre) VALUES
('Tecnología'),
('Ropa'),
('Alimentos'),
('Otros');

INSERT INTO productos (nombre, descripcion, precio, stock, imagen, categoria_id) VALUES
('Drom', 'Marca SAMSUNG', 200.00, 23, '../views/publics/imagenes/drom.webp', 2),
('Tablet', 'Es de IPHONE', 1000.00, 5, '../views/publics/imagenes/tablet.jpg', 1),
('Perphone', 'Tiene forma de pera', 200.50, 1, '../views/publics/imagenes/peraphone.jpg', 1),
('Polera de Boca juniors', 'Es de boca papa', 100.00, 25, '../views/publics/imagenes/polera_boca.jpg', 2),
('Chamarra', 'Es de color rojo', 25.00, 13, '../views/publics/imagenes/chamarra.webp', 2),
('Tomate', 'Es rojo', 10.00, 23, '../views/publics/imagenes/tomate.jpg', 3),
('Piña', 'Es amarilla', 15.00, 12, '../views/publics/imagenes/piña.jpg', 3),
('Mesa de madera', 'Es de madera', 90.00, 45, '../views/publics/imagenes/mesas.jpg',4);


