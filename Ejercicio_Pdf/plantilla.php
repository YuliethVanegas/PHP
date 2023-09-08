<?php 
require 'fpdf/fpdf.php';//Nombre de la carpeta donde esta el archivo
class PDF extends FPDF
{
    function header()
{
    $this->SetFillColor(180, 237, 230 ); // R, G, B (valores del 0 al 255)
$this->Rect(0, 0, 210, 297, 'F'); //Rectángulo del tamaño de la página, 'f' Para rellenar el fondo
    $this->image("IMAGENES/autos.jpg",15,10,35,);//posicion de x y y alto ancho y alto
    $this->setfont('times','b',12);
    $this->cell(30);
    $this->cell(120,10,'TALLER AUTOMOTRIZ',0,0,'C');
    $this->cell(25,5,"Fecha:". date("d/m/y"),0,1,'C');
    $this->Ln(10);
    }
    
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo(). '/{nb}',0,0,'C');
    }
    }
    

?>