<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos - FuenteStore</title>
    <link rel="stylesheet" href="../views/publics/tabla.css">
    <link rel="icon" href="../views/publics/imagenes/icono.png">
</head>
<body>

<header>
    <img src="../views/publics/imagenes/Fuentes store HD.jpeg">
    <nav>
        <ul class="nav-right">
            <li><a href="../controllers/productos_index.php">Inicio</a></li>
            <li class="dropdown">
                <a href="#">Filtrar</a>
                <ul class="submenu">
                    <li><a href="../controllers/filtrar_categorias.php?categoria_id=1">Tecnología</a></li>
                    <li><a href="../controllers/filtrar_categorias.php?categoria_id=2">Ropa</a></li>
                    <li><a href="../controllers/filtrar_categorias.php?categoria_id=3">Alimentos</a></li>
                    <li><a href="../controllers/filtrar_categorias.php?categoria_id=4">Otros</a></li>
                </ul>
            </li>
            <li><a href="../controllers/mostrar_productos.php">Modificar productos</a></li>
        </ul>
    </nav>
</header>

<main class="content">
    <div class="neumorphic-card">
        <h1>Lista de Productos</h1>
        <div class="button-container">
            <a href="../controllers/insertar_productos.php" class="neumorphic-button primary-button">Registrar nuevo producto</a>
        </div>
        <br>
        <table class="neumorphic">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($productos)): ?>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= $producto['id'] ?></td>
                            <td><?= $producto['nombre'] ?></td>
                            <td><?= $producto['descripcion'] ?></td>
                            <td>$<?= number_format($producto['precio'], 2) ?></td>
                            <td><?= $producto['stock'] ?></td>
                            <td><img src="<?= $producto['imagen'] ?>" alt="Imagen" class="product-img"></td>
                            <td>
                                <a href="actualizar_productos.php?id=<?= $producto['id'] ?>" class="neumorphic-button update-action">Actualizar</a>
                                <a href="../controllers/eliminar_producto.php?id=<?= $producto['id'] ?>" class="neumorphic-button delete-action">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7">No hay productos registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<footer>
    <p>© 2025 FuenteStore - Todos los derechos reservados.</p>
</footer>

</body>
</html>

