<?php
include '../includes/db.php';

// Consulta para obtener todas las contraseñas no hasheadas
$sql = "SELECT id, contraseña FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $contraseña = $row['contraseña'];

        // Hashear la contraseña
        $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

        // Actualizar la contraseña en la base de datos
        $update_sql = "UPDATE usuarios SET contraseña = ? WHERE id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("si", $hashed_password, $id);
        $stmt->execute();
    }
    echo "Contraseñas actualizadas correctamente.";
} else {
    echo "No se encontraron contraseñas para actualizar.";
}

$conn->close();
?>