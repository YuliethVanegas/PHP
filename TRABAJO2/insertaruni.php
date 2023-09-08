<?php
  include 'Conexion.php';

$nom = $_POST['nombreU'];
$marca = $_POST['edad'];
$precio = $_POST['email'];
$descripcion = $_POST['programa'];
$email = $_POST['docente'];

$sql = "INSERT INTO estudiantes(nombreapellido, edad,emailE,programaId,docenteId) 
VALUES('$nom','$marca','$precio','$descripcion','$email')";


$resultado = mysqli_query($conn, $sql);

if ($resultado === TRUE) {
    header("location:Index.php");
} else {
    echo "Datos NO insertados";
}