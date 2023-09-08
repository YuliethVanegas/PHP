
<?php
// Establecer la conexión con la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "registro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}



// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$usuario = $_POST["usuario"];
	$contraseña = $_POST["contraseña"];
	
	// Verificar si el usuario ya existe en la base de datos
	$sql = "SELECT id FROM datos WHERE usuario = '$usuario'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	echo "El nombre de usuario ya esta registrado. Por favor, elige otro nombre de usuario.";
	} else {
	
	// Insertar datos en la base de datos
	$sql = "INSERT INTO sesion (nombre,email, usuario, contraseña) VALUES ('$nombre', '$email','$usuario', '$contraseña')";
	
	if ($conn->query($sql) === TRUE) {
	// Redireccionar a la página de inicio de sesión
		 header("Location: Bienvenido.php");
		 exit();
	
	} else {
		echo "Error al registrar el usuario". $conn->error;
	}
	}
	}
	
	
	$conn->close();
	?>


