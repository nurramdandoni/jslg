<?php 

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Cetak Sertificate');

$w = $pdf->GetPageWidth();  // Lebar halaman
$h = $pdf->GetPageHeight(); // Tinggi halaman
foreach($list_peserta->result() as $sertificate){
$pdf->Image($sertificate->template_img, 0, 0, $w, $h);
}
$pdf->SetTextColor(154,155,161);

$pdf->Cell(10,15,'',0,1);
$pdf->cell(8);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(80,7,'',0,0,'C');
$pdf->Cell(100,7,'',0,0,'C');
foreach($list_peserta->result() as $sertificate){
$pdf->Cell(80,7,'No. JSLG.'.$sertificate->id_diklat.'.'.$sertificate->id_produk.'/'.date('Y',strtotime($sertificate->tanggal_diklat)),0,0,'C');
}
$pdf->Cell(10,15,'',0,1);
$pdf->AddFont('styleFont','','IndentureEnglishPenmanDemo-Xdyj.php');
$pdf->SetFont('styleFont','',60);
$pdf->cell(8);
$pdf->Cell(80,7,'',0,0,'C');
$pdf->Cell(100,7,'',0,0,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(80,7,'',0,0,'C');

$pdf->Cell(10,50,'',0,1);
$pdf->cell(8);
// $pdf->SetFont('Arial','B',8);
$pdf->AddFont('styleFont','','IndentureEnglishPenmanDemo-Xdyj.php');
$pdf->SetFont('styleFont','',40);
$pdf->Cell(80,7,'',0,0,'C');
foreach($list_peserta->result() as $sertificate){
    $pdf->Cell(100,7,$sertificate->nama_peserta,0,0,'C');
}
$pdf->Cell(80,7,'',0,0,'C');


$pdf->Output();

?>