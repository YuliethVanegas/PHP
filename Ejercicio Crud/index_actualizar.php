<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
	<link rel="stylesheet" href="eli.css">
</head>
<body>

    
	
	<form action="actualizar.php" method="POST">
    <h1>ACTUALIZAR</h1>
	
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required><br><br>
		<label for="id">Id:</label>
		<input type="text" id="id" name="id" required><br><br>


		<input type="submit" value="Actualizar">
        <a href="indexcrud.php" target="_blank">
        <button type="button">Regresar</button>
	
       
	</form>
</body>
</html>