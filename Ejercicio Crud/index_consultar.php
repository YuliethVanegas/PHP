<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
	<link rel="stylesheet" href="eli.css">
</head>
<body>

    
	
	<form action="consultar.php" method="POST">
    <h1>CONSULTAR</h1>
	
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required><br><br>
		


		<input type="submit" value="Consultar">
        <a href="indexcrud.php" target="_blank">
        <button type="button">Regresar</button>
	
       
	</form>
</body>
</html>