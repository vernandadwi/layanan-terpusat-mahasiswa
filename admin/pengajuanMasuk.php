<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
if (isset($_POST['ubah']))
    $id = $_POST['idhistory'];
else
    $id = '';

if (isset($_POST['ubahOk'])) {
    $statusbaru = filter_input(INPUT_POST, "statusbaru", FILTER_SANITIZE_SPECIAL_CHARS);
    $idbaru = filter_input(INPUT_POST, "idhistory", FILTER_SANITIZE_SPECIAL_CHARS);
    updateHistory($idbaru, $statusbaru);
    header("location:pengajuanMasuk.php?navito=user");
}

if(isset($_POST['pdf'])){
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
    <th>Id Formulir</th>
    <th>Ubah Status</th>
    <th>PDF</th>
</thead>
<tbody>
    <?php
    $result = getAllHistory();
    while ($row = mysqli_fetch_row($result)) {
        ?>
    <form method='post' action=''>
        <tr>
            <?php
            if ($id == $row[0]) {
                ?>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td class="data">
                    <select name='statusbaru' >
                        <!--<option name='statusbaru' value='<?= $row[4] ?>'><?= $row[4] ?></option>-->                 
                            <option value='Belum di proses' selected="">Belum di proses</option>
                            <option value='Proses'>Proses</option>
                            <option value='Bisa Diambil'>Bisa Diambil</option>
                    </select>
                </td>
                <td><?= $row[5] ?></td>
                <td>
                    <input type='submit' value='Update' name="ubahOk"/>
                    <input type='hidden' name='idhistory' value='<?= $row[0] ?>'/>
                </td>
                <td>
                    <input type='submit' value='PDF' name='pdf'/>
                  <input type='text' id='IdForm'name='IdForm' value='<?= $row[5] ?>'readonly='' hidden=''/>
                  <input type='text' id='namaForm'name='namaForm' value='<?= $row[2] ?>'readonly='' hidden=''/>
                </td>
                <?php
            } else {
                ?>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
                <td><?= $row[5] ?></td>
                <td>
                    <input type='submit' value='Ubah Status' name='ubah'/>
                    <input type='hidden' name='idhistory' value='<?= $row[0] ?>'/>
                </td>
                <td>
                    <input type='submit' value='PDF' name='pdf'/>
                  <input type='text' id='IdForm'name='IdForm' value='<?= $row[5] ?>'readonly='' hidden=''/>
                  <input type='text' id='namaForm'name='namaForm' value='<?= $row[2] ?>'readonly='' hidden=''/>
                </td>
                <?php
            }
            ?>
        </tr>
    </form>
    <?php
}
?>
</tbody>
</table>

<br>
<a href="../user/akses.php" class="action-button shadow animate blue">Kembali</a>