<?php
require_once '../models/Productos.php';
$productos = new Productos();
$productos = $productos->mostrarProductos();
include '../views/listar_productos.php';
exit;
?>