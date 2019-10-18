<?php 

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak Sertificate');

$w = $pdf->GetPageWidth();  // Lebar halaman
$h = $pdf->GetPageHeight(); // Tinggi halaman

$pdf->Image('http://localhost/jslg/temp_sertificate/1234.jpg', 0, 0, $w, $h);

$pdf->SetTextColor(154,155,161);

$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Arial','B',8);
$pdf->cell(8);
$pdf->Cell(80,7,'blok 1',1,0,'C');
$pdf->Cell(100,7,'blok 2',1,0,'C');
$pdf->Cell(80,7,'blok 3',1,0,'C');

// $pdf->Cell(10,10,'',0,1);
// $pdf->AddFont('styleFont','','IndentureEnglishPenmanDemo-Xdyj.php');
// $pdf->SetFont('styleFont','',50);
// $pdf->Cell(0,0,'Sertificate',0,1,'C');


$pdf->Output();

?>