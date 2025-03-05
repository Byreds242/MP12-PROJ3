<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    // Consulta para insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $usuario, $correo, $contraseña);

    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar el usuario.";
    }

    $stmt->close();
    $conn->close();
}
?>