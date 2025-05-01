<?php
require_once '../models/Productos.php';

if (isset($_GET['id'])) {
    $productoModel = new Productos();
    $productoModel->deleteProductos($_GET['id']);
}

header('Location: mostrar_productos.php');
exit;
?>
