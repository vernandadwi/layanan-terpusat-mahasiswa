<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
require('../fpdf17/fpdf.php');
$id='';
session_start();
$id=$_GET['id'];
$result = PrintMTByNRP($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
}
$array1 = array_slice($array[0], 1,7);
$array2 = array_slice($array[0], 8,20);
$ditujukan = $array1['surat_ditujukan'];
$data1= array(
"tanggal"=>"TANGGAL PENGAJUAN",
"matakuliah"=>"TUGAS MATA KULIAH",
"kode_matakuliah"=>"KODE MATA KULIAH",
"surat_ditujukan"=>"SURAT DITUJUKAN KEPADA NAMA BAPAK / IBU",
"jabatan"=>"JABATAN BAPAK / IBU TERSEBUT",
"nama_instansi"=>"NAMA INSTANSI atau PERUSAHAAN",
"alamat_instansi"=> "ALAMAT LENGKAP INSTANSI atau PERUSAHAAN"
);
$data2 = array(
"nama1"=>"NAMA:",
"nrp1"=>"NRP:",
"nama2"=>"NAMA:",
"nrp2"=>"NRP:",
"nama3"=>"NAMA:",
"nrp3"=>"NRP:",
"nama4"=>"NAMA:",
"nrp4"=>"NRP:",
"nama5"=>"NAMA:",
"nrp5"=>"NRP:",
"nama6"=>"NAMA:",
"nrp6"=>"NRP:",
"nama7"=>"NAMA:",
"nrp7"=>"NRP:",
"nama8"=>"NAMA:",
"nrp8"=>"NRP:",
"nama9"=>"NAMA:",
"nrp9"=>"NRP:",
"nama10"=>"NAMA:",
"nrp10"=>"NRP:",
);

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('arial','B',12);
//define standard font size
$pdf ->Cell(189, 5, 'FORM PENGAJUAN MAHASISWA UNTUK KEPERLUAN TUGAS MATA KULIAH',0,1, 'C');
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
  $pdf ->SetFont('arial', 'B',11);
	$pdf->Cell(100,($line * $cellHeight),$data1[$item1],1,0); //adapt height to number of lines
  $pdf ->SetFont('arial', '',11);
  $pdf->MultiCell($cellWidth,$cellHeight,$index1,1,1);
}
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(189, 9, 'NAMA DAN NRP ANGGOTA KELOMPOK', 0, 1, 'C');
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama1'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama6'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp1'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp6'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama2'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama7'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp2'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp7'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama3'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama8'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp3'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp8'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama4'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama9'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp4'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp9'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama5'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NAMA : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nama10'], 1, 1);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp5'], 1, 0);
$pdf ->SetFont('arial', 'B',11);
$pdf ->cell(20, 9, 'NRP : ', 1, 0);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(74, 9, $array2['nrp10'], 1, 1);
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
