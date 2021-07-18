<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
require('../fpdf17/fpdf.php');
$id='';
session_start();
$id=$_GET['id'];
$result = PrintSPCyNRP($id);
while($row = mysqli_fetch_assoc($result)){
  $array[] = $row;
}
$array1 = array_slice($array[0], 1,5);
$array2 = array_slice($array[0], 6,5);
$data1= array(
"nama"=>"N A M A",
"user_nrp"=>"N R P",
"fakultas"=>"Fakultas",
"prodi"=>"Prodi",
"alamat"=>"Alamat lengkap",
"no_hp"=>"No. Telp/HP",
);
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
		$this->Cell(53,7,'FM/DAKS/UKM/2016/0201',1,1,'R');

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
$pdf ->Cell(32, 3, 'Yth. Dekan Fakultas',0,0);
$pdf->SetFont('arial','U',9);
$pdf ->Cell(109, 3,$array1['fakultas'] ,0,1);
$pdf->SetFont('arial','',9);
$pdf ->Cell(189, 3, 'Universitas Kristen Maranatha',0,1);
$pdf ->Cell(189, 3, 'BANDUNG',0,1);
$pdf ->ln(5);
$pdf->SetFont('arial','',13);
$pdf ->cell(189,5, 'SURAT PERMOHONAN CUTI STUDI',0,1,'C');
$pdf ->ln(5);
$pdf ->SetFont('arial', '',11);
$pdf ->cell(189,5, 'Yang bertanda tangan dibawah ini :',0,1);
$pdf ->ln(5);
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
  $pdf->cell(20,($line * $cellHeight),'',0,0);
  $pdf ->SetFont('arial', 'B',11);
	$pdf->Cell(35,($line * $cellHeight),$data1[$item1],0,0);
  $pdf->Cell(3,($line * $cellHeight),':',0,0); //adapt height to number of lines
  $pdf ->SetFont('arial', 'U',11);
  $pdf->MultiCell($cellWidth,$cellHeight,$index1,0,1);
}
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(90, 5, 'Mengajukan permohonan cuti studi untuk Semester',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(10, 5, $array2['semester'],0,0);
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(30, 5, 'Tahun Akademik',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(20, 5, $array2['tahun_akademik'],0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->Cell(20, 5, 'Adapun alasan pengambilan cuti tersebut :',0,1);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(20, 5, $array2['alasan'],0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->ln(3);
$pdf ->multicell(189, 5, 'Demikian surat permohonan ini saya buat dengan sebenar-benarnya. Atas perhatiannya saya ucapkan terima kasih',0,1);
$pdf ->ln(5);
$pdf ->Cell(100, 5, '',0,0);
$pdf ->Cell(20, 5, 'Bandung,',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(30, 5, date('d-m-Y', strtotime($array2['tanggal_pengajuan'])),0,1);
$pdf ->SetFont('arial', '',11);
$pdf ->ln(3);
$pdf ->Cell(114, 5, '',0,0);
$pdf ->Cell(10, 5, 'Pemohon',0,1,'C');
$pdf ->ln(20);
$pdf ->Cell(114, 5, '',0,0);
$pdf ->SetFont('arial', 'U',11);
$pdf ->Cell(10, 5, $array1['nama'],0,1,'C');
$pdf ->Cell(100, 4,'','L,R,T',0);
$pdf ->SetFont('arial', '',10);
$pdf ->Cell(80, 4,'','L,R,T',1);
$pdf ->Cell(100, 4,'Mengetahui Dosen Wali','R,L',0);
$pdf ->SetFont('arial', '',9);
$pdf ->Cell(80, 4,'Ttd','R,L',1,'R');
$pdf ->Cell(100, 4,'','B,R,L',0);
$pdf ->cell(80, 4,'Dosen Wali','B,R,L',1,'R');
$pdf ->Cell(100, 4,'','L,R,T',0);
$pdf ->SetFont('arial', '',10);
$pdf ->Cell(80, 4,'','L,R,T',1);
$pdf ->Cell(100, 4,'Mengetahui Ketua prodi','R,L',0);
$pdf ->SetFont('arial', '',9);
$pdf ->Cell(80, 4,'Ttd & cap','R,L',1,'R');
$pdf ->Cell(100, 4,'','B,R,L',0);
$pdf ->cell(80, 4,'Ka Prodi','B,R,L',1,'R');
$pdf ->Cell(100, 4,'','L,R,T',0);
$pdf ->SetFont('arial', '',10);
$pdf ->Cell(80, 4,'','L,R,T',1);
$pdf ->Cell(100, 4,'Telah Menyelesaikan Kewajiban Keuangan','R,L',0);
$pdf ->SetFont('arial', '',9);
$pdf ->Cell(80, 4,'Ttd & cap','R,L',1,'R');
$pdf ->Cell(100, 4,'','B,R,L',0);
$pdf ->cell(80, 4,'Wakil Dekan','B,R,L',1,'R');
$pdf ->Cell(100, 4,'','L,R,T',0);
$pdf ->SetFont('arial', '',10);
$pdf ->Cell(80, 4,'','L,R,T',1);
$pdf ->cell(100, 4,'Telah Menyelesaikan semua kewajiban di Perpustakaan','R,L',0);
$pdf ->SetFont('arial', '',9);
$pdf ->Cell(80, 4,'Ttd & cap','R,L',1,'R');
$pdf ->Cell(100, 4,'','B,R,L',0);
$pdf ->cell(80, 4,'Ka Perpustakaan','B,R,L',1,'R');
$pdf ->ln(5);
$pdf ->SetFont('arial', '',9);
$pdf ->cell(80, 5,'Catatan : ',0,1);
$pdf ->ln(5);
$pdf ->cell(80, 5,'1) *) coret yang tidak perlu:',0,1);
$pdf ->cell(80, 5,'2)    Surat permohonan cuti studi diajukan minimal 2 (dua) minggu sebelum masa perwalian',0,1);
$pdf->Output();
?>
