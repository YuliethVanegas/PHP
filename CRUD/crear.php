<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Registro</title>
 <link rel="stylesheet" href="todo.css">
</head>
<body>
  <div class="container">
  <img src="img/descarga.png" alt="" class="img">
    <form method="post" action="crear.php">
      <h2>Registro de usuario</h2>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
      </div>
      <div class="form-group">
        <label for="nombre">Email:</label>
        <input type="text" name="email" id="email" required>
        </div>
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required>
      </div>
      <button type="submit">Registar</button>
     <button><a href="index.php">Regresar</a></button>
      </body>
      </html>
<?php
require 'conexion.php';
// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $contraseña = ($_POST["contraseña"]);

      // Verificar si el usuario ya existe en la base de datos
      $sql = "SELECT *FROM sesion WHERE usuario = '$usuario' AND contraseña= '$contraseña'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
      } else {
          // Insertar el nuevo usuario en la base de datos
          $sql = "INSERT INTO sesion(nombre, email, usuario, contraseña) VALUES ('$nombre','$email', '$usuario', '$contraseña')";
          if ($conn->query($sql) === TRUE) {
              // Redireccionar a la página de inicio de sesión
              header("Location: index.php");
              exit();
          } else {
              echo "Error al registrar el usuario: " . $conn->error;
          }
      }
  }

?>
