<?php
require_once("../fpdf/fpdf.php");
require_once("conexion.php");

$pdf = new FPDF();
$pdf  -> ADDPage(); 
$pdf  -> SetFont('Arial', '', 10);
$pdf  -> Cell(18, 10, '',0);
$pdf  -> Cell(150, 10, 'Cultura Bakana Colombiana', 0);
$pdf  -> SetFont('Arial', '', 9);
$pdf  -> Cell(50, 10, 'fecha: '.date('d-m-y').'', 0);
$pdf  -> Ln(15);
$pdf  -> SetFont('Arial', 'B', 11);
$pdf  -> Cell(70, 8, '', 0);
$pdf  -> Cell(100, 8, 'LISTADO DE PRODUCTOS', 0);
$pdf  -> Ln(8);
$pdf  -> Ln(15);
$pdf  -> SetFont('Arial', 'B', 8);
$pdf  -> Cell(15, 8, 'itm', 0);
$pdf  -> Cell(40, 8, 'ID', 0);
$pdf  -> Cell(60, 8, 'Titulo', 0);
$pdf  -> Cell(35, 8, 'Precio', 0);

$pdf  -> Ln(8);
$pdf  -> SetFont('Arial', '', 8);
//consula

$usuario = mysql_query('SELECT * FROM anuncio');
$item = 0;
while ($usuario2 = mysql_fetch_array($usuario)) {
	
	$item = $item+1;

	 $pdf-> Cell(15, 8, $item, 0);
	 $pdf-> Cell(40, 8, $usuario2['anuncio_id'], 0);
	 $pdf-> Cell(60, 8, $usuario2['anuncio_titulo'], 0);
	 $pdf-> Cell(35, 8, $usuario2['anuncio_precio'], 0);
	 $pdf-> Ln(8);
	 
}

$pdf ->Output();


 ?>