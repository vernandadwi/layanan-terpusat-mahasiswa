<?php

include '../util/utility.php';
include '../dbFunction/dbFunction.php';
//include '../header/headerForm.php';
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
   $fakultas = filter_input(INPUT_POST, "fakultas", FILTER_SANITIZE_SPECIAL_CHARS);
    $prodi = filter_input(INPUT_POST, "progstud", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $no_hp = filter_input(INPUT_POST, "telpon", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun_akademik = filter_input(INPUT_POST, "tahun", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);
    $alasan = filter_input(INPUT_POST, "alasan", FILTER_SANITIZE_SPECIAL_CHARS);
    $alasan2=filter_input(INPUT_POST, "alasan2", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal_pengajuan = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    addPermohonanCuti($nama, $fakultas, $prodi, $alamat, $no_hp, $tahun_akademik, $semester, $alasan, $alasan2, $tanggal_pengajuan, $user_nrp, "Belum di proses");
?>

    
<link rel="stylesheet" href="../css/addUser.css">
<br>
<br>
<br>
<br>
<body>
    <h1 align="center">Formulir Permohonan Cuti Studi</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Tanggal Pengajuan : </td>
            <td ><p><?php echo $_POST['tanggal'];?></p></td>
        </tr>
        <tr >
            <td width="300px">Nama : </td>
            <td ><p><?php echo $_POST['nama'];?></p></td>
        </tr>
        <tr >
            <td width="300px">NRP : </td>
            <td ><p><?php echo $_POST['nrp'];?></p></td>
        </tr>
        <tr>
            <td>Fakultas dan Program Pendidikan :</td>
            <td><?php echo $_POST['fakultas'];?> - <?php echo $_POST['progstud'];?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap :</td>
            <td><?php echo $_POST['alamat'];?></td>
        </tr>
        <tr>
            <td>No Telp / HP : </td>
            <td><?php echo $_POST['telpon'];?>
        </tr>
        <tr>
            <td>Semester :</td>
            <td><?php echo $_POST['semester'];?></td>
        </tr>
        <tr>
            <td>Tahun Akademik : </td>
            <td><p><?php echo $_POST['tahun'];?></p></td>
        </tr>
        <tr>
            <td>Alasan : </td>
            <td><p><?php echo $_POST['alasan'];?></p></td>
            
        </tr>
        <tr>
            <td>Alasan Lainnya : </td>
            <td><p><?php echo $_POST['alasan2'];?></p></td>
        </tr>
    </table>
    </body>

    <br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>
