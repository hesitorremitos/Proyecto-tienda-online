<?php
require_once '../models/Productos.php';
require_once '../models/Categorias.php';

$categoriasModel = new Categorias();
$categorias = $categoriasModel->mostrarCategorias();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $producto = new Productos();
    $producto->nombre = $_POST['nombre'];
    $producto->descripcion = $_POST['descripcion'];
    $producto->precio = $_POST['precio'];
    $producto->stock = $_POST['stock'];
    $producto->imagen = $_POST['imagen'];
    $producto->categoria_id = $_POST['categoria_id']; 

    $producto->insertarProductos($producto->nombre, $producto->descripcion, $producto->precio, $producto->stock, $producto->imagen, $producto->categoria_id);
    
    header('Location: ../controllers/mostrar_productos.php');
    exit;
}

include '../views/insertar_productos_form.php';
?>
