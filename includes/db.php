<?php
$servername = "localhost";
$username = "root";
$password = "bender10";
$dbname = "e-commerce";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
<<<<<<< HEAD
//echo "Conexión exitosa";
=======
echo "Conexión exitosa";
>>>>>>> origin/login
?>