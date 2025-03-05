<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($contraseña, $row['contraseña'])) {
            // Iniciar sesión
            session_start();
<<<<<<< HEAD
         //   $_SESSION['usuario'] = $row['usuario'];
=======
            $_SESSION['usuario'] = $row['usuario'];
>>>>>>> origin/login
            echo "Login exitoso. Bienvenido, " . htmlspecialchars($row['usuario']) . "!";
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Correo no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>