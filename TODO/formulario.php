<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ejemplo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error _) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

// Insertar datos en la base de datos
$sql = "INSERT INTO datos (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
	echo "Datos insertados correctamente";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>