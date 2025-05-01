<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto - FuenteStore</title>
    <link rel="stylesheet" href="../views/publics/registrar.css">
    <link rel="icon" href="../views/publics/imagenes/icono.png" >

<body>

    <header>
        <img src="../views/publics/imagenes/Fuentes store HD.jpeg">
    </header>

    <main class="content">
        <div class="neumorphic-card">
            <h2>Registrar Producto</h2>

            <form action="../controllers/insertar_productos.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" required>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" step="0.01" required>

                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock" required>

                <label for="imagen">Dirección de la imagen o URL</label>
                <input type="text" id="imagen" name="imagen" oninput="mostrarVistaPrevia()" required>
                <div class="image-preview">
                    <img id="vista-previa" src="" alt="Vista previa" />
                </div>
                <br>
                <label for="categoria_id">Elige la categoría</label>
                <select id="categoria_id" name="categoria_id" required>
                    <?php
                    foreach ($categorias as $categoria) {
                        echo "<option value='{$categoria['id']}'>{$categoria['nombre']}</option>";
                    }
                    ?>
                </select>

                <div class="button-container">
                    <button type="submit" class="neumorphic-button primary-button">Registrar</button>
                    <a href="../controllers/mostrar_productos.php" class="neumorphic-button secondary-button">Volver</a>
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
