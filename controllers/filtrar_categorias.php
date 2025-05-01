<?php
require_once '../models/Categorias.php';

$productosModel = new Categorias();

$categoria_id = isset($_GET['categoria_id']) ? intval($_GET['categoria_id']) : null;

if ($categoria_id !== null) {
    $productos = $productosModel->filtrarPorCategoria($categoria_id);
} else {
    $productos = []; 
}

include '../views/filtrar_productos_categoria.php';
