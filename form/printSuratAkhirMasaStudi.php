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
		$this->Cell(53,7,'FM/DAKS/UKM/2016/0901',1,1,'R');

		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(20);

	}
}

$pdf = new PDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('arial','B',12);
$pdf ->cell(189,5, 'FORMULIR AKHIR MASA STUDI',0,1,'C');
$pdf->SetFont('arial','B',10);
$pdf ->cell(189,5, '(MENGUNDURKAN DIRI)',0,1,'C');
$pdf -> ln(5);
$pdf ->cell(190,5, 'Petunjuk Pengisian :','L,T,R',1);
$pdf ->cell(190,5, '-   Formulir ini harus diisi oleh mahasiswa yang mengundurkan diri dari Universitas Kristen Maranatha','L,R',1);
$pdf ->cell(190,5, '-   Pengisian harap dilakukan dengan teliti dan benar, menggunakan huruf cetak','L,R',1);
$pdf ->cell(190,5, '-   Setiap data yang ditulis dalam formulir ini adalah tanggungjawab mahasiswa yang bersangkutan','L,B,R',1);
$pdf->SetFont('arial','',10);
$pdf ->cell(189,5, 'Lampiran :',0,1);
$pdf ->cell(189,5, '1) Pas foto terbaru ukuran 2 X 3 cm (2 buah, hitam putih untuk pembuatan transkrip)',0,1);
$pdf ->cell(189,5, '2) Kartu Tanda Mahasiswa (KTM) - asli',0,1);
$pdf->SetFont('arial','B',11);
$pdf ->cell(189,5, '_________________________________________________________________________________________________________________________',0,1);
$pdf->SetFont('arial','',10);
$pdf ->cell(18,5, 'Fakultas : ',0,0);
$pdf ->Cell(18, 5, $array1['fakultas'],0,0);
$pdf ->cell(35,5, 'Jurusan/Prog. Studi : ',0,0);
$pdf ->Cell(10, 5, $array1['program_studi'],0,1);
$pdf ->cell(40,5, 'Program Pendidikan : ',0,0);
$pdf ->Cell(10, 5, $array1['program_pendidikan'],0,1);
$pdf ->ln(3);
$pdf ->cell(55,5, '1.  N a m a',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->Cell(10, 5, $array1['nama'],0,1);

$pdf ->cell(55,5, '2.  Tempat & Tgl/Bln/Thn lahir',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->Cell(20, 5, $array1['tempat_lahir'],0,0);
$pdf ->cell(3,5, '/',0,0);
$pdf ->Cell(30, 5, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1);
$pdf ->cell(55,5, '3.  Nomor Pokok',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->Cell(10, 5, $array1['user_nrp'],0,1);
$pdf ->Cell(55, 5, '4.  alamat lengkap',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->Cell(10, 5, $array1['alamat'],0,1);
$pdf ->Cell(57, 5, '    (untuk surat menyurat)',0,0);
$pdf ->Cell(10, 5, 'Kota :',0,0);
$pdf ->Cell(25, 5, $array1['kota'],0,0);
$pdf ->Cell(20, 5, 'Kode Pos :',0,0);
$pdf ->Cell(15, 5, $array1['kode_pos'],0,0);
$pdf ->Cell(10, 5, 'Telp :',0,0);
$pdf ->Cell(20, 5, $array1['no_hp'],0,1);
$pdf ->Cell(57, 5, '',0,0);
$pdf ->Cell(15, 5, 'Provinsi :',0,0);
$pdf ->Cell(25, 5, $array1['provinsi'],0,0);
$pdf ->Cell(15, 5, 'No. HP :',0,0);
$pdf ->Cell(30, 5, $array1['no_hp'],0,1);
$pdf ->Cell(57, 5, '',0,0);
$pdf ->Cell(20, 5, 'E-mail :',0,0);
$pdf ->Cell(10, 5, $array1['email'],0,1);
$pdf ->Cell(55, 5, '5.  Mulai mengundurkan diri',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->cell(18,5, 'Semester',0,0);
$pdf ->Cell(13, 5, $array1['semester'],0,0);
$pdf ->cell(28,5, 'tahun akademik',0,0);
$pdf ->Cell(10, 5, $array1['tahun_akademik'],0,1);
$pdf ->Cell(55, 5, '6.  Alasan Mengundurkan diri',0,0);
$pdf ->cell(2,5, ':',0,0);
$pdf ->Cell(10, 5, $array1['alasan'],0,1);
$pdf ->ln(3);
$pdf ->cell(105,2, '','L,T,R',1);
$pdf ->cell(80,5, '1. Telah menyelesaikan semua kewajiban','L',0);
$pdf ->cell(20,5, '',"L,T,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(20,5,'              Bandung,',0,0);
$pdf ->cell(30,5,date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),0,1,'R');
$pdf ->cell(80,5, '    di Perpustakaan UK. Maranatha','L',0);
$pdf ->cell(20,5, '',"L,R",0);
$pdf ->cell(5,5, '','R',1);
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(20,5, '',"L,B,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(50,5, 'Hormat Saya,',0,1,'R');
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(25,5, 'Diparaf Ka. Perpustakaan & cap','R',1,'R');
$pdf ->cell(105,2, '','L,R',1);
$pdf ->cell(80,5, '2. Telah menyelesaikan semua kewajiban','L',0);
$pdf ->cell(20,5, '',"L,T,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, 'Materai','L,T,R',1,'C');
$pdf ->cell(80,5, '    Keuangan','L',0);
$pdf ->cell(20,5, '',"L,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, 'Rp. 6000','L,R',1,'C');
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(20,5, '',"L,B,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, '','L,R',1,'C');
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(25,5, 'Diparaf PD Fakultas & cap','R',0,'R');
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, '','L,B,R',1,'C');
$pdf ->cell(105,2, '','L,R',1);
$pdf ->cell(80,5, '3. Telah menyelesaikan semua kewajiban','L',0);
$pdf ->cell(20,5, '',"L,T,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(13,5, '',0,0);
$pdf ->cell(2,5, '(',0,0);
$pdf ->cell(50,5, $array1['nama'],0,0,'C');
$pdf ->cell(2,5, ')',0,1);
$pdf ->cell(80,5, '    di Fakultas Jurusan/Program Studi','L',0);
$pdf ->cell(20,5, '',"L,R",0);
$pdf ->cell(5,5, '','R',1);
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(20,5, '',"L,B,R",0);
$pdf ->cell(5,5, '','R',0);
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, 'Mengetahui',0,1,'C');
$pdf ->cell(80,5, '','L',0);
$pdf ->cell(25,5, 'Diparaf Kajur/Kaprodi & cap','R',0,'R');
$pdf ->cell(25,5, '',0,0);
$pdf ->cell(30,5, 'Orangtua/wali mahasiswa',0,1,'C');
$pdf ->Cell(50, 5, 'Bandung,','L',0,'R');
$pdf ->SetFont('arial', '',10);
$pdf ->Cell(55, 5, date('d-m-Y', strtotime($array1['tanggal_pengajuan'])),'R',1);
$pdf ->SetFont('arial', '',10);
$pdf ->cell(105,3, '','L,R',1);
$pdf ->Cell(105, 5, 'Mengetahui :','L,R',1,'C');
$pdf ->cell(105,15, '','L,R',1);
$pdf ->SetFont('arial', 'U',10);
$pdf ->Cell(105, 5, '(____________________)','L,R',0,'C');
$pdf ->Cell(80, 5, '(____________________)',0,1,'C');
$pdf ->Cell(105, 5, 'D e k a n','L,B,R',1,'C');
$pdf ->SetFont('arial', 'U',8);
$pdf ->cell(80, 5,'*) Coret yang tidak perlu.',0,1);
$pdf->Output();
?>
