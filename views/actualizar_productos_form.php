<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Producto - FuenteStore</title>
    <link rel="stylesheet" href="../views/publics/actualizar.css">
    <link rel="icon" href="../views/publics/imagenes/icono.png">
</head>
<body>

    <header>
        <img src="../views/publics/imagenes/Fuentes_store_HD.jpeg" alt="FuenteStore Logo">
    </header>

    <main class="content">
        <div class="neumorphic-card">
            <h2>Actualizar Producto</h2>

            <form action="../controllers/actualizar_productos.php" method="POST">
                <input type="hidden" name="id" value="<?= $productoData['id'] ?>">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?= $productoData['nombre'] ?>" required>

                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" value="<?= $productoData['descripcion'] ?>" required>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" step="0.01" value="<?= $productoData['precio'] ?>" required>

                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock" value="<?= $productoData['stock'] ?>" required>

                <label for="imagen">Dirección de la imagen o URL</label>
                <input type="text" id="imagen" name="imagen" value="<?= $productoData['imagen'] ?>" oninput="mostrarVistaPrevia()" required>
                <div class="image-preview">
                    <img id="vista-previa" src="<?= $productoData['imagen'] ?>" alt="Vista previa" />
                </div>
                <br>
                <label for="categoria_id">Elige la categoría</label>
                <select id="categoria_id" name="categoria_id" required>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['id'] ?>" <?= $categoria['id'] == $productoData['categoria_id'] ? 'selected' : '' ?>>
                            <?= $categoria['nombre'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <div class="button-container">
                    <button type="submit" class="neumorphic-button primary-button">Actualizar</button>
                    <a href="mostrar_productos.php" class="neumorphic-button secondary-button">Volver a la lista</a>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>© 2025 FuenteStore - Todos los derechos reservados.</p>
    </footer>

    <script>
        function mostrarVistaPrevia() {
            const imagenURL = document.getElementById("imagen").value;
            document.getElementById("vista-previa").src = imagenURL;
        }
    </script>

</body>
</html>
