<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
$nrp = '';

if(isset($_POST['ubah'])){
  $namaform=$_POST['namaForm'];
  $id=$_POST['IdForm'];
if ($namaform == 'Formulir Mahasiswa Aktif'){
  header("location:../form/printMahasiswaAktif.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Pengajuan Tugas'){
  header("location:../form/printMahasiswaTugas.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Hapus Nilai'){
  header("location:../form/printHapusNilai.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Akhir Masa Studi'){
  header("location:../form/printSuratAkhirMasaStudi.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Ijin Aktif Studi'){
  header("location:../form/printSuratIjinAktifStudi.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Permohonan Cuti Studi'){
  header("location:../form/printSuratPermohonanCuti.php?id=$id");
}}elseif(isset ($_POST['edit'])){
    $namaform=$_POST['namaForm'];
    $id=$_POST['IdForm'];
    if ($namaform == 'Formulir Mahasiswa Aktif'){
  header("location:../form/editMahasiswaAktif.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Pengajuan Tugas'){
  header("location:../form/editMahasiswaTugas.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Hapus Nilai'){
  header("location:../form/printHapusNilai.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Akhir Masa Studi'){
  header("location:../form/printSuratAkhirMasaStudi.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Ijin Aktif Studi'){
  header("location:../form/printSuratIjinAktifStudi.php?id=$id");
}elseif ($namaform== 'Formulir Mahasiswa Permohonan Cuti Studi'){
  header("location:../form/printSuratPermohonanCuti.php?id=$id");
}}
?>

<link rel="stylesheet" href="../css/addUser.css">

<br>
<br>
<br>
<br>
<table class="table">
    <thead>
    <th>Id History</th>
    <th>NRP</th>
    <th>Nama Formulir</th>
    <th>Tanggal Pengajuan</th>
    <th>Status</th>
    <th>PDF</th>
    <th>Edit PDF</th>
</thead>
<tbody>
    <?php
        session_start();
    $acc=$_SESSION['nrp'];
    $result = getAllHistoryByNRP($acc);
    while ($row = mysqli_fetch_row($result)) {
        ?>
    <form method='post' action=''>
        <tr>
            <td><?=$row[0] ?></td>
            <td><?=$row[1] ?></td>
            <td><?=$row[2] ?></td>
            <td><?=$row[3] ?></td>
            <td><?=$row[4] ?></td>
                <td>
                    <input type='submit' value='PDF' name='ubah'/>
                  <input type='text' id='IdForm'name='IdForm' value='<?= $row[5] ?>'readonly='' hidden=''/>
                  <input type='text' id='namaForm'name='namaForm' value='<?= $row[2] ?>'readonly='' hidden=''/>
                </td>
                <td>
                    <input type='submit' value='Edit PDF' name='edit'/>
                  
                </td>
        </tr>
    </form>
    <?php
}
?>
</tbody>
</table>

<br>
<a href="akses.php" class="action-button shadow animate blue">Kembali</a>