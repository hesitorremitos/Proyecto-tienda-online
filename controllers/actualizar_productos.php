<?php
require_once '../models/Productos.php';
require_once '../models/Categorias.php';

$categoriasModel = new Categorias();
$categorias = $categoriasModel->mostrarCategorias();

$productos = new Productos();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productos->actualizarProducto(
        $_POST['id'], 
        $_POST['nombre'], 
        $_POST['descripcion'], 
        $_POST['precio'], 
        $_POST['stock'], 
        $_POST['imagen'], 
        $_POST['categoria_id']
    );

    header('Location: ../controllers/mostrar_productos.php');
    exit;
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $productoData = $productos->mostrarProductosID($_GET['id']);
    if (!$productoData) {
        die("Error: Producto con ID {$_GET['id']} no encontrado.");
    }
}
include '../views/actualizar_productos_form.php';
?>
