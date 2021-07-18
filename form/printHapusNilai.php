<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
require('../fpdf17/fpdf.php');
$id='';
session_start();
$id=$_GET['id'];
$result = PrintHNByNRP($id);
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
    $this->ln(7);
	}
}

$pdf = new PDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('arial','B',12);
//define standard font size
$pdf ->Cell(150, 6, '',0,0);
$pdf ->Cell(30, 6, '','L,T,R',1);
$pdf ->Cell(150, 6, '',0,0);
$pdf ->Cell(30, 6, '','L,R',1);
$pdf ->Cell(150, 6, '',0,0);
$pdf ->Cell(30, 6, 'Foto','L,R',1,"C");
$pdf ->Cell(150, 6, '',0,0);
$pdf ->Cell(30, 6, '3x4','L,R',1,"C");
$pdf ->Cell(40, 6, '',0,0);
$pdf ->Cell(110, 6, 'MEMO PENGAJUAN HAPUS NILAI',0,0,'C');
$pdf ->Cell(30, 6, '','L,R',1);
$pdf ->Cell(150, 6, '',0,0);
$pdf ->Cell(30, 6, '','L,B,R',1);
$pdf ->Cell(189, 6, '',0,1, 'C');
$pdf ->SetFont('arial', '',12);

$pdf ->Cell(10, 6, '',0,0);
$pdf ->Cell(30, 6, 'NRP',0,0);
$pdf ->Cell(3, 6, ':',0,0);
$pdf ->Cell(30, 6, $array1['user_nrp'],0,1);
$pdf ->Cell(10, 6, '',0,0);
$pdf ->Cell(30, 6, 'Nama',0,0);
$pdf ->Cell(3, 6, ':',0,0);
$pdf ->Cell(30, 6, $array1['nama'],0,1);
$pdf ->Cell(10, 6, '',0,0);
$pdf ->Cell(30, 6, 'Email',0,0);
$pdf ->Cell(3, 6, ':',0,0);
$pdf ->Cell(30, 6, $array1['email'],0,1);
$pdf ->Cell(10, 6, '',0,0);
$pdf ->Cell(30, 6, 'No. TLP / Hp',0,0);
$pdf ->Cell(3, 6, ':',0,0);
$pdf ->Cell(30, 6, $array1['no_hp'],0,1);
$pdf ->Cell(10, 6, '',0,0);
$pdf ->Cell(30, 6, 'Tgl. Pengajuan',0,0);
$pdf ->Cell(3, 6, ':',0,0);
$pdf ->Cell(30, 6, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1);
$pdf ->ln(10);

$pdf ->Cell(10, 6, 'No',1,0,'C');
$pdf ->Cell(60, 6, 'Nama MK',1,0,'C');
$pdf ->Cell(25, 6, 'Kode MK',1,0,'C');
$pdf ->Cell(15, 6, 'Nilai',1,0,'C');
$pdf ->Cell(25, 6, 'Semester',1,0,'C');
$pdf ->Cell(45, 6, 'Alasan',1,1,'C');
$pdf ->Cell(10, 6, '1',1,0,'C');
$pdf ->Cell(60, 6, $array1['nama1'],1,0,'C');
$pdf ->Cell(25, 6, $array1['kodeMK1'],1,0,'C');
$pdf ->Cell(15, 6, $array1['nilai1'],1,0,'C');
$pdf ->Cell(25, 6, $array1['semester1'],1,0,'C');
$pdf ->Cell(45, 6, 'Mata Kuliah Pilhan',1,1,'C');
$pdf ->Cell(10, 6, '2',1,0,'C');
$pdf ->Cell(60, 6, $array1['nama2'],1,0,'C');
$pdf ->Cell(25, 6, $array1['kodeMK2'],1,0,'C');
$pdf ->Cell(15, 6, $array1['nilai2'],1,0,'C');
$pdf ->Cell(25, 6, $array1['semester2'],1,0,'C');
$pdf ->Cell(45, 6, 'Mata Kuliah Pilhan',1,1,'C');
$pdf ->Cell(10, 6, '3',1,0,'C');
$pdf ->Cell(60, 6, $array1['nama3'],1,0,'C');
$pdf ->Cell(25, 6, $array1['kodeMK3'],1,0,'C');
$pdf ->Cell(15, 6, $array1['nilai3'],1,0,'C');
$pdf ->Cell(25, 6, $array1['semester3'],1,0,'C');
$pdf ->Cell(45, 6, 'Mata Kuliah Pilhan',1,1,'C');
$pdf ->Cell(10, 6, '4',1,0,'C');
$pdf ->Cell(60, 6, $array1['nama4'],1,0,'C');
$pdf ->Cell(25, 6, $array1['kodeMK4'],1,0,'C');
$pdf ->Cell(15, 6, $array1['nilai4'],1,0,'C');
$pdf ->Cell(25, 6, $array1['semester4'],1,0,'C');
$pdf ->Cell(45, 6, 'Mata Kuliah Pilhan',1,1,'C');
$pdf ->Cell(10, 6, '5',1,0,'C');
$pdf ->Cell(60, 6, $array1['nama5'],1,0,'C');
$pdf ->Cell(25, 6, $array1['kodeMK5'],1,0,'C');
$pdf ->Cell(15, 6, $array1['nilai5'],1,0,'C');
$pdf ->Cell(25, 6, $array1['semester5'],1,0,'C');
$pdf ->Cell(45, 6, 'Mata Kuliah Pilhan',1,1,'C');

$pdf ->SetFont('arial', 'B',12);
$pdf ->Cell(25, 6, 'CATATAN:',0,0);
$pdf ->SetFont('arial', 'i',12);
$pdf ->Cell(45, 6, 'Formulir yang diproses adalah formulir yang diisi lengkap dengan data yang valid',0,1);
$pdf ->SetFont('arial', 'B',12);
$pdf ->Cell(45, 6, 'Nilai yang sudah dihapus tidak dapat dikembalikan!!!',0,1);
$pdf ->Cell(45, 6, 'Jangan sampai salah mengisi kode mk, nilai dan semester. Mohon cek transkrip terbaru!',0,1);

$pdf ->ln(10);
$pdf ->SetFont('arial', '',12);
$pdf ->cell(60, 6, 'Tanda Tangan Mahasiswa',0,0,'C');
$pdf ->cell(60, 6, 'Dosen Wali',0,0,'C');
$pdf ->cell(60, 6, 'Petugas Yang Menerima Memo',0,1,'C');
$pdf ->cell(148, 6, 'Tgl.',0,0,'R');
$pdf ->cell(50, 6, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1);
$pdf ->ln(20);
$pdf ->cell(60, 6, '(____________________)',0,0,'C');
$pdf ->cell(60, 6, '(____________________)',0,0,'C');
$pdf ->cell(60, 6, '(____________________)',0,1,'C');
$pdf ->cell(5, 6, '',0,0);
$pdf ->cell(60, 6, 'NRP :',0,0);
$pdf ->cell(60, 6, 'NIK :',0,0);
$pdf ->cell(60, 6, 'NIK :',0,1);

$pdf ->ln(10);
$pdf ->SetFont('arial', 'B',11);
$pdf ->Cell(10, 6, 'No',1,0,'C');
$pdf ->Cell(160, 6, 'Alasan',1,1,'C');
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(10, 6, '1',1,0,'C');
$pdf ->Cell(110, 6, 'Transkrip nilai terbaru',1,0,'C');
$pdf ->Cell(50, 6, '',1,1,'C');
$pdf ->Cell(10, 6, '2',1,0,'C');
$pdf ->Cell(110, 6, 'Mengisi From pembatalan niali di TU',1,0,'C');
$pdf ->Cell(50, 6, '',1,1,'C');

$pdf->Output();
?>
