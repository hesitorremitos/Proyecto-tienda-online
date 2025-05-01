<?php
require_once '../models/Categorias.php';

$productosModel = new Categorias();
$productos = $productosModel->mostrarProductosYCategorias();

include '../views/principal.php';
?>
