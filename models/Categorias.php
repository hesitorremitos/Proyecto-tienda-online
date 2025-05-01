<?php
include_once 'Connection.php';

class Categorias extends Connection {
    
    public function mostrarCategorias() {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "SELECT * FROM categorias");
        $stmt->execute();
        $result = $stmt->get_result();
        $categorias = array();

        while ($row = $result->fetch_assoc()) {
            array_push($categorias, $row);
        }
        
        return $categorias;
    }
    public function mostrarProductosYCategorias() {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, 
        "SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, p.imagen, c.nombre AS categoria
        FROM productos p INNER JOIN categorias c ON p.categoria_id = c.id");
        $stmt->execute();
        $result = $stmt->get_result();
        $productos = array();
    
        while ($row = $result->fetch_assoc()) {
            array_push($productos, $row);
        }
        
        return $productos;
    }
    public function filtrarPorCategoria($categoria_id) {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, 
            "SELECT productos.*, categorias.nombre AS categoria_nombre 
             FROM productos 
             JOIN categorias ON productos.categoria_id = categorias.id 
             WHERE productos.categoria_id = ?");
        
        $stmt->bind_param("i", $categoria_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $productos = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    
        return $productos;
    }

}
?>
