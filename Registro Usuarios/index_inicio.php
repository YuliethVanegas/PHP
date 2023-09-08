<!DOCTYPE html>
<html>
<head>
	<title>Inicio Sesion</title>
	<link rel="stylesheet" href="inicio.css">
</head>
<body>

    
	
	<form action="inicio.php" method="POST">
    <h1>Iniciar Sesion</h1>
	
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required><br><br>
		<label for="contraseña">contraseña:</label>
		<input type="text" id="contraseña" name="contraseña" required><br><br>
      
		<input type="submit" value="Iniciar Sesión">
	</form>
</body>
</html>