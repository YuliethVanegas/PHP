<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "crud";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$id = $_POST["id"];

  // Consulta para actualizar un registro
  $sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id";
    
  if ($conn->query($sql) === TRUE) {
      echo "Registro actualizado correctamente";
  } else {
      echo "Error al actualizar el registro: " . $conn->error;
  }

?>