<?php
include "pdf/fpdf.php";
include("pdf/conexion.php");

class PDF extends FPDF
{
function Header()
{
	$this->Image("fondo1.jpg",0,0, 600,17);
	$this->Image("escudo_blanco.png",1,0,35,17);
	$this->Ln(20);
	$this->SetFont('Arial','B',30);
	$this->Cell(60);
	$this->Cell(70,10,'AGENDA 2023',0,0,'C');
	$this->Ln(20);
	$this->SetFont('Arial','B',8);
	$this->Cell(20, 20, 'FOTO', 1,0, 'C', 0);
	$this->Cell(22, 20, 'CONTACTO', 1,0, 'C', 0);
	$this->Cell(20, 20, 'PUESTO', 1,0, 'C', 0);
	$this->Cell(22, 20, 'EMPRESA', 1,0, 'C', 0);
	$this->Cell(20, 20, 'TIPO', 1,0, 'C', 0);
	$this->Cell(18, 20, 'PRIORIDAD', 1,0, 'C', 0);
	$this->Cell(20, 20, 'TELEFONO', 1,0, 'C', 0);
	$this->Cell(30, 20, 'CORREO', 1,0, 'C', 0);
	$this->Cell(20, 20, 'NOTA', 1,1, 'C', 0);

	
}

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);


//$pdf->Cell(70,10,'Agenda 2023',0,0,'C');
//$pdf->Ln(50);

$consulta = "SELECT * FROM contacto";
$result  = $mysqli->query($consulta);

while ($row = $result->fetch_assoc()) {

	$pdf->Cell(20,20, $pdf->Image($row['foto'], $pdf->GetX(), $pdf->GetY(), 20), 1,0,'C');
	$pdf->Cell(22, 20, $row['contacto'], 1,0, 'C', 0);
	$pdf->Cell(20, 20, $row['puesto'], 1,0, 'C', 0);
	$pdf->Cell(22, 20, $row['empresa'], 1,0, 'C', 0);
	$pdf->Cell(20, 20, $row['tipo'], 1,0, 'C', 0);
	$pdf->Cell(18, 20, $row['prioridad'], 1,0, 'C', 0);
	$pdf->Cell(20, 20, $row['telefono'], 1,0, 'C', 0);
	$pdf->Cell(30, 20, $row['correo'], 1,0, 'C', 0);
	$pdf->Cell(20, 20, $row['nota'], 1,1, 'C', 0);
	
	
	
}





// $pdf->Cell(100,100,'!Hola, Mundo!', 1,0,'R', false, "www.google.com");
// $pdf->Cell(0,20,"gil");

$pdf->Output();

?>
