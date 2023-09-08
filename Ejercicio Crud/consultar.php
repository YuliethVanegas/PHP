<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}
// Consulta para obtener todos los registros
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "<br>";
        echo "nombre: " . $row["nombre"] . "<br>";
        echo "email: " . $row["email"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron registros";
}
?>