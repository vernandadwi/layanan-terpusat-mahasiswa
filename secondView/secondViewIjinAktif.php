<?php

include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal_pengajuan = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun_akademik = filter_input(INPUT_POST, "tahun", FILTER_SANITIZE_SPECIAL_CHARS);
    addIjinAktifStudi($nama, $alamat, $tanggal_pengajuan, $semester, $tahun_akademik, $user_nrp, "Belum di proses");
?>
<link rel="stylesheet" href="../css/addUser.css">

<br>
<br>
<br>
<br>
<body>
    <h1 align="center">FORM PENGAJUAN MAHASISWA IJIN AKTIF STUDI</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Nama :</td>
            <td ><p><?php echo $_POST['nama'];?></p></td>
        </tr>
        <tr>
            <td>NRP :</td>
            <td><?php echo $_POST['nrp'];?></td>
        </tr>
        <tr>
            <td>Alamat :</td>
            <td><?php echo $_POST['alamat'];?></td>
        </tr>
        <tr>
            <td>Tanggal Pengajuan :</td>
            <td><?php echo $_POST['tanggal'];?></td>
        </tr>
        <tr>
            <td>Semester :</td>
            <td><?php echo $_POST['semester'];?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran : </td>
            <td><?php echo $_POST['tahun'];?></td>
        </tr>
    </table>
    </body>

<br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>
