<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores del formulario
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];

// Encriptar la contraseña
$contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar los valores en la base de datos
$sql = "INSERT INTO usuarios (usuario, contraseña, edad, correo) VALUES ('$usuario', '$contraseña_encriptada', $edad, '$correo')";

if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
