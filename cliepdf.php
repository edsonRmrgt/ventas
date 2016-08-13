<?php
require_once('fpdf/fpdf.php');
include_once('librerias/conexion.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('img/avatar3.jpg' , 10 ,8, 10 , 13);
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'TIENDA DE COMPUTADORAS', 0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE CLIENTES', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Nº', 0);
$pdf->Cell(20, 8, 'CARNET', 0);
$pdf->Cell(30, 8, 'NOMBRES', 0);
$pdf->Cell(30, 8, 'APELLIDOS', 0);
$pdf->Cell(50, 8, 'DIRECCION', 0);
$pdf->Cell(20, 8, 'TELEFONO', 0);
$pdf->Cell(20, 8, 'CIUDAD', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);

$sql="select * from clientes";
$result = $conexion->query($sql);

$item=0;
while ($row = $result->fetch_array()) {
	$item = $item + 1;
	$pdf->Cell(15, 8, $item, 0);
	$pdf->Cell(20, 8,$row['carnet'], 0);
	$pdf->Cell(30, 8,$row['Nombres'], 0);
	$pdf->Cell(30, 8, $row['Apellidos'], 0);
	$pdf->Cell(50, 8, $row['Direccion'], 0);
	$pdf->Cell(20, 8, $row['Telefono'], 0);
	$pdf->Cell(20, 8, $row['Ciudad'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>