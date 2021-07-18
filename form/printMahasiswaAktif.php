<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
require('../fpdf17/fpdf.php');
$id='';
session_start();
$id=$_GET['id'];
$result = PrintMAByNRP($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
}
$tanggal_pengajuan = array_slice($array[0], 16,1);
$nama = array_slice($array[0], 1,1);
$nrp = array_slice($array[0], 18,1);
$slice1 = array_slice($array[0], 4,7);
$array1 = array_merge($tanggal_pengajuan,$nama,$nrp,$slice1);
$array2 = array_slice($array[0], 12,4);
$ditujukan = $array1['surat_ditujukan'];
$data1= array(
  "tanggal"=>"TANGGAL PENGAJUAN",
  "nama"=>"NAMA LENGKAP MAHASISWA",
  "user_nrp"=>"NRP MAHASISWA",
  "Semester"=>"SEMESTER GANJIL / GENAP",
  "tahun_ajaran"=>"TAHUN AJARAN",
  "alamat_mhs"=>"ALAMAT LENGKAP MAHASISWA DI BANDUNG",
  "no_hp"=>"NO TLP / HP MAHASISWA",
  "surat_ditujukan"=>"SURAT DITUJUKAN KEPADA NAMA BAPAK / IBU",
  "jabatan"=>"JABATAN BAPAK / IBU TERSEBUT",
  "nama_instansi"=>"NAMA INSTANSI atau PERUSAHAAN",
  "alamat_instansi"=>"ALAMAT LENGKAP INSTASI atau PERUSAHAAN",
  "keperluan"=>"UNTUK KEPERLUAN PENGAJUAN"
);
$data2 = array(
  "nama_ortu"=>"NAMA LENGKAP ORANGTUA",
  "NIK"=>"NIK/NIP (Nomor Induk Kepegawaian)",
  "alamat"=>"ALAMAT LENGKAP ORANGTUA",
  "kota"=>"KOTA",
  "provinsi"=>"PROVINSI"
);

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('arial','B',12);
//define standard font size
$pdf ->Cell(189, 5, 'FORM PENGAJUAN MAHASISWA AKTIF UNTUK KEPERLUAN KP, STA, TA, TUNJANGAN',0,1, 'C');
$pdf ->SetFont('arial', 'B',15);
$pdf ->Cell(189, 5, 'PENGISIAN HARUS MENGGUNAKAN HURUF BESAR / BALOK/ CAPITAL!!',0,1, 'C');
$pdf ->SetFont('arial', '',12);
foreach($array1 as $item1 =>$index1){
	$cellWidth=90;//wrapped cell width
	$cellHeight=6;//normal one-line cell height
	//check whether the text is overflowing
	if($pdf->GetStringWidth($index1) < $cellWidth){
		//if not, then do nothing
		$line=1;
	}else{
		//if it is, then calculate the height needed for wrapped cell
		//by splitting the text to fit the cell width
		//then count how many lines are needed for the text to fit the cell
		$textLength=strlen($index1);	//total text length
		$errMargin=10;		//cell width error margin, just in case
		$startChar=0;		//character start position for each line
		$maxChar=0;			//maximum character in a line, to be incremented later
		$textArray=array();	//to hold the strings for each line
		$tmpString="";		//to hold the string for a line (temporary)
		while($startChar < $textLength){ //loop until end of text
			//loop until maximum character reached
			while(
			$pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
			($startChar+$maxChar) < $textLength ) {
				$maxChar++;
				$tmpString=substr($index1,$startChar,$maxChar);
			}
			//move startChar to next line
			$startChar=$startChar+$maxChar;
			//then add it into the array so we know how many line are needed
			array_push($textArray,$tmpString);
			//reset maxChar and tmpString
			$maxChar=0;
			$tmpString='';
		}
		//get number of line
		$line=count($textArray);
	}
	//write the cells
	$pdf->Cell(100,($line * $cellHeight),$data1[$item1],1,0); //adapt height to number of lines
	$pdf->MultiCell($cellWidth,$cellHeight,$index1,1,1);
}

$pdf ->cell(122, 9, 'Data dibawah ini mohon dilengkapi apabila surat ditujukan untuk', 0, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(70, 9, 'keperluan TUNJANGAN', 0, 1);
$pdf ->SetFont('arial', '',11);

foreach($array2 as $index2 =>$item2){
	$cellWidth=90;//wrapped cell width
	$cellHeight=6;//normal one-line cell height
	//check whether the text is overflowing
	if($pdf->GetStringWidth($item2) < $cellWidth){
		//if not, then do nothing
		$line=1;
	}else{
		//if it is, then calculate the height needed for wrapped cell
		//by splitting the text to fit the cell width
		//then count how many lines are needed for the text to fit the cell
		$textLength=strlen($item2);	//total text length
		$errMargin=10;		//cell width error margin, just in case
		$startChar=0;		//character start position for each line
		$maxChar=0;			//maximum character in a line, to be incremented later
		$textArray=array();	//to hold the strings for each line
		$tmpString="";		//to hold the string for a line (temporary)
		while($startChar < $textLength){ //loop until end of text
			//loop until maximum character reached
			while(
			$pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
			($startChar+$maxChar) < $textLength ) {
				$maxChar++;
				$tmpString=substr($item2,$startChar,$maxChar);
			}
			//move startChar to next line
			$startChar=$startChar+$maxChar;
			//then add it into the array so we know how many line are needed
			array_push($textArray,$tmpString);
			//reset maxChar and tmpString
			$maxChar=0;
			$tmpString='';
		}
		//get number of line
		$line=count($textArray);
	}
	//write the cells
	$pdf->Cell(100,($line * $cellHeight),$data2[$index2],1,0); //adapt height to number of lines
	$pdf->MultiCell($cellWidth,$cellHeight,$item2,1,1);
}
$pdf ->cell(189, 9, 'Pernyataan di bawah ini WAJIB DIISI apabila untuk keperluan KP/STA/TA:', 0, 1);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(162, 5, 'Telah dikonfirmasi langsung secara lisan oleh pihak perusahaan setempat dengan Bapak/ Ibu', 0, 0);
$pdf ->cell(27, 5,$ditujukan,0,1);
$pdf ->cell(50, 5, 'Tanda Tangan Mahasiswa Ybs',0,1);
$pdf ->cell(189, 25, '',0,1);
$pdf ->cell(50, 9, '(_________________________)',0,1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(50, 5, 'NOTE:',0,1);
$pdf ->SetFont('arial', '',10);
$pdf ->cell(189, 5, '1. Surat keterangan paling cepat dapat diambil 3 hari kerja setelah tanggal pengajuan',0,1);
$pdf ->cell(189, 5, '2. Surat pengajuan akan diproses apabila form pengajuan telah diisi dengan lengkap dan benar serta tulisan dapat dibaca!!',0,1);
$pdf ->cell(50, 5, 'Surat Telah diterima oleh',0,0,'R');
$pdf ->cell(50, 5, '________________________',0,0);
$pdf ->cell(15, 5, '.Tanggal',0,0);
$pdf ->cell(50, 5, '___________________',0,1);
$pdf ->cell(50, 5, 'Tanda Tangan',0,0,'R');
$pdf->Output();
?>
