<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Formulario de contacto</h1>
	<form action="validar.php" method="POST">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="telefono">Teléfono:</label>
		<input type="telefono" id="telefono" name="telefono" required><br><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>