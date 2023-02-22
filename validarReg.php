<?php
$servername = "localhost"; // Cambiar por la dirección del servidor
$username = "root"; // Cambiar por el usuario de la base de datos
$password = ""; // Cambiar por la contraseña de la base de datos
$dbname = "login"; // Cambiar por el nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST["usuario"];
$contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
echo "Usuario registrado exitosamente";
} else {
echo "Error al registrar usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
