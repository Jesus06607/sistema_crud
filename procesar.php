<?php
// Incluir el archivo de conexión a la base de datos
include 'connection.php';

// Obtener los datos del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    echo "Inicio de sesión exitoso";
} else {
    // Credenciales inválidas
    echo "Credenciales inválidas";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
