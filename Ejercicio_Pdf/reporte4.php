<?php
require 'conexion.php'; //nombre del archivo de conexion
require 'plantilla.php'; //nombre de la carpeta donde esta el archivo

$nombre = $_POST ['nombre'];

$pdf = new PDF(); //crear un nuevo archivo
$pdf-> addpage(); //crear una pagina 
$pdf-> setfont("times", "b", 12); //Tipo de letra del reporte
$pdf-> cell(125,5,"REPORTE DE EMPLEADOS", 11,11 ,"R");

$pdf->Ln(13);//salto de linea

//Consultar la base de datos para verificar las credenciales
$sql= "SELECT codigo_cliente, nombre, direccion, telefono FROM cliente WHERE nombre ='$nombre'"; 
$resultado= $conn->query($sql);
$pdf->Ln(9); //Salto de linea


$pdf-> cell(28,8, "Codigo cliente",1,0,"C"); //Estructura de la tabla
$pdf-> cell(50,8, "Nombre",1,0,"C");
$pdf-> cell(30,8, "Direccion",1,0,"C");
$pdf-> cell(50,8, "Telefono",1,1,"C");


//Encabezado de la linea
while ($fila=$resultado->fetch_assoc()) {
  
    $pdf-> cell(28,8,$fila[ "codigo_cliente"],1,0,"L");
    $pdf-> cell(50,8,$fila[ "nombre"],1,0,"C");
    $pdf-> cell(30,8,$fila[ "direccion"],1,0,"C");
    $pdf-> cell(50,8,$fila[ "telefono"],1,1,"C");
    
}
$pdf-> addpage();
$pdf->output();

?>