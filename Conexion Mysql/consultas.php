<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "conexion";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];

//Consulta para Obstener todos los registros
$sql= "SELECT * FROM trabajadores WHERE id IN (3,12)" ;

$resul = $conn-> query($sql);


if ($resul->num_rows > 0){
    while ($row = $resul->fetch_assoc()){
        echo "id:" . $row["id"] . "<br>";
        echo "Nombre:" . $row["nombre"] . "<br>";
        echo "Email:" . $row["email"] . "<br>";
        echo "<br>";


    }
} else {
	echo "No se encontraron registros " . $sql . "<br>" . $conn->error;
}
?>