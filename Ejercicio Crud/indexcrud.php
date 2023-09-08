<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="crud.css">
</head>
<body>

    
	
	<form action="crud.php" method="POST">
    <h1>REGISTRO CRUD</h1>
	
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required><br><br>


		<input type="submit" value="Registrarse">
	


		<a href="index_eliminar.php" target="_blank">
        <button type="button">Eliminar</button><br><br>
		
		
		<a href="index_actualizar.php" target="_blank">
        <button type="button">Actualizar</button><br><br>

		<a href="index_consultar.php" target="_blank">
        <button type="button">Consultar</button>
       
	</form>
</body>
</html>