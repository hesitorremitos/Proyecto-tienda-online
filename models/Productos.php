<?php
include_once 'Connection.php';
class Productos extends Connection {
    public function mostrarProductos(){
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "SELECT * FROM productos");
        $stmt->execute();
        $result = $stmt->get_result();
        $productos = array();

        while ($row = $result->fetch_assoc()) {
            array_push($productos, $row);
        }
        return $productos;
    }
    public function insertarProductos($nombre, $descripcion, $precio, $stock, $imagen, $categoria_id) {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "INSERT INTO productos (nombre, descripcion, precio, stock, imagen, categoria_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdssi", $nombre, $descripcion, $precio, $stock, $imagen, $categoria_id);
        $stmt->execute();
        $stmt->close();
    }
    public function deleteProductos($id) {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
    public function actualizarProducto($id, $nombre, $descripcion, $precio, $stock, $imagen, $categoria_id) {
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, stock = ?, imagen = ?, categoria_id = ? WHERE id = ?");
        $stmt->bind_param("ssdssii", $nombre, $descripcion, $precio, $stock, $imagen, $categoria_id, $id);
        $stmt->execute();
        $stmt->close();
    }public function mostrarProductosID($id){
        $this->connect();
        $stmt = mysqli_prepare($this->connection, "SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
  
    
}

?>