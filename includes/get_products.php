<?php
include 'db.php';

// Consulta para obtener todos los productos
$sql = "SELECT nombre, precio, imagen FROM productos";
$result = $conn->query($sql);

$productos = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
} else {
    echo "No se encontraron productos.";
    exit;
}

$conn->close();
?>