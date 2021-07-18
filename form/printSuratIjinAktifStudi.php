<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
require('../fpdf17/fpdf.php');
$id='';
session_start();
$id=$_GET['id'];
$result = PrintIASyNRP($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
}
$array1 = $array[0];
class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',12);

		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);

		//put logo
		$this->Image('../image/Signature Maranatha_H_Hitam.png',10,10,70);
    $this->Ln(10);
    $this->Cell(136,10,'',0,0);
		$this->Cell(53,7,'FM/DAKS/UKM/2016/0801',1,1,'R');

		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(20);

	}
}

$pdf = new PDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('arial','',9);
$pdf ->Cell(189, 3, 'Kepada:',0,1);
$pdf ->Cell(13, 3, 'Yth. Sdr.',0,0);
$pdf->SetFont('arial','U',9);
$pdf ->Cell(109, 3,$array1['nama'],0,1);
$pdf->SetFont('arial','',9);
$pdf ->Cell(7, 3, 'Nrp.',0,0);
$pdf->SetFont('arial','U',9);
$pdf ->Cell(109, 3,$array1['user_nrp'],0,1);
$pdf->SetFont('arial','',9);
$pdf ->Cell(5, 3, 'jln.',0,0);
$pdf->SetFont('arial','U',9);
$pdf ->multicell(109, 3,$array1['alamat'],0,1);
$pdf->SetFont('arial','',9);
$pdf ->ln(5);
$pdf->SetFont('arial','',13);
$pdf ->cell(189,5, 'SURAT IJIN AKTIF STUDI',0,1,'C');
$pdf ->ln(3);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(189,5, 'Nomor ',0,1,'C');
$pdf ->ln(3);
$pdf->SetFont('arial','U',11);
$pdf ->Cell(189, 3,'_______________________________',0,1,'C');
$pdf->SetFont('arial','',11);
$pdf ->ln(5);
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(112, 5, 'Memperhatikan surat permohonan aktif studi saudara tertanggal',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(30, 5, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(30, 5, 'dengan ini kami beritahukan bahwa saudara diijinkan untuk aktif kembali dalam kegiatan akademik pada',0,1);
$pdf ->Cell(17, 5, 'semester',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(10, 5, $array1['semester'],0,0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(30, 5, 'Tahun Akademik',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(30, 5,$array1['tahun_akademik'],0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->ln(3);
$pdf ->Cell(10, 5, 'Atas perhatian saudara, kami ucapkan terima kasih.',0,1);
$pdf ->ln(5);
$pdf ->Cell(120, 5, '',0,0);
$pdf ->Cell(20, 5, 'Bandung,',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(30, 5, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->ln(3);
$pdf ->Cell(134, 5, '',0,0);
$pdf ->Cell(10, 5, 'Dekan Fakultas,',0,1,'C');
$pdf ->ln(20);
$pdf ->Cell(134, 5, '',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(10, 5, '____________________',0,1,'C');
$pdf ->ln(5);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(80, 5,'TEMBUAN :',0,1);
$pdf ->cell(80, 5,'1) Yth. Rektor (sebagai laporan) melalui DAKD;',0,1);
$pdf ->cell(80, 5,'1) Yth. Ketua Prodi;',0,1);
$pdf ->cell(80, 5,'1) Yth. Dosen Wali;',0,1);
$pdf ->cell(80, 5,'1) Yth. DK UK Maranatha;',0,1);
$pdf ->cell(80, 5,'1) Yth. SAT UK Maranatha;',0,1);
$pdf ->ln(5);
$pdf ->SetFont('arial', '',9);
$pdf ->cell(80, 5,'Catatan :',0,1);
$pdf ->cell(80, 5,'*) Coret yang tidak perlu.',0,1);
$pdf->Output();
?>
