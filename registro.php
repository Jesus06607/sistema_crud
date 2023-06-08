<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Obtener los datos del formulario de registro
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Verificar si el usuario ya existe en la base de datos
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "El nombre de usuario ya está registrado";
} else {
    // Insertar el nuevo usuario en la tabla "users"
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
