<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FuenteStore - Productos por Categoría</title>
    <link rel="stylesheet" href="../views/publics/filtrar.css">
    <link rel="icon" href="../views/publics/imagenes/icono.png" >
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
        <section class="product-list">
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <div class="product-item">
                        <img src="<?php echo $producto['imagen']; ?>" alt="Imagen del producto">
                        <div class="product-info">
                            <h2><?php echo $producto['nombre']; ?></h2>
                            <p><strong>Descripción:</strong> <?php echo $producto['descripcion']; ?></p>
                            <p><strong>Precio:</strong> $<?php echo number_format($producto['precio'], 2); ?></p>
                            <p><strong>Stock Disponible:</strong> <?php echo $producto['stock']; ?></p>
                            <p><strong>Categoría:</strong> <?php echo $producto['categoria_nombre']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay productos disponibles en esta categoría.</p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>© 2025 FuenteStore - Todos los derechos reservados.</p>
    </footer>
</body>
</html>
