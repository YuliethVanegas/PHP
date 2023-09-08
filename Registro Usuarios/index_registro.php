<!DOCTYPE html>
<html>
<head>
	<title>Registro usuario</title>
	<link rel="stylesheet" type="text/css" href="registro.css">
</head>
<body>

    
	
	<form action="registro.php" method="POST">
    <h1>Registro Usuario</h1>

		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>

		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required><br><br>
        
		<label for="contraseña">Contraseña:</label>
		<input type="password" id="contraseña" name="contraseña" required><br><br>
		
		<input type="submit" value="Crear Cuenta">

		<a href= "index_inicio.php">Iniciar Sesión</a>
	</form>
</body>
</html>