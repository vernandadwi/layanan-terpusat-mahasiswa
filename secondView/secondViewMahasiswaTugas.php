<?php
session_start();
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
    $tanggal = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $matakuliah = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodematakuliah = filter_input(INPUT_POST, "kode", FILTER_SANITIZE_SPECIAL_CHARS);
    $ditujukan = filter_input(INPUT_POST, "ditujukan", FILTER_SANITIZE_SPECIAL_CHARS);
    $jabatan = filter_input(INPUT_POST, "jabatan", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama_instansi = filter_input(INPUT_POST, "instansi", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat_instansi = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama1 = filter_input(INPUT_POST, "nama1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp1 = filter_input(INPUT_POST, "nrp1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama2 = filter_input(INPUT_POST, "nama2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp2 = filter_input(INPUT_POST, "nrp2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama3 = filter_input(INPUT_POST, "nama3", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp3 = filter_input(INPUT_POST, "nrp3", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama4 = filter_input(INPUT_POST, "nama4", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp4 = filter_input(INPUT_POST, "nrp4", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama5 = filter_input(INPUT_POST, "nama5", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp5 = filter_input(INPUT_POST, "nrp5", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama6 = filter_input(INPUT_POST, "nama6", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp6 = filter_input(INPUT_POST, "nrp6", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama7 = filter_input(INPUT_POST, "nama7", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp7 = filter_input(INPUT_POST, "nrp7", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama8 = filter_input(INPUT_POST, "nama8", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp8 = filter_input(INPUT_POST, "nrp8", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama9 = filter_input(INPUT_POST, "nama9", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp9 = filter_input(INPUT_POST, "nrp9", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama10 = filter_input(INPUT_POST, "nama10", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp10 = filter_input(INPUT_POST, "nrp10", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = filter_input(INPUT_POST, "pengaju", FILTER_SANITIZE_SPECIAL_CHARS);
    addMahasiswaTugas1($tanggal, $matakuliah, $kodematakuliah, $ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $user_nrp,'Belum di proses');
    addMahasiswaTugas2($user_nrp, $nama1, $nrp1, $nama2, $nrp2, $nama3, $nrp3, $nama4, $nrp4, $nama5, $nrp5, $nama6, $nrp6, $nama7, $nrp7, $nama8, $nrp8, $nama9, $nrp9, $nama10, $nrp10);
?>

<link rel="stylesheet" href="../css/addUser.css">
<br>
<br>
<br>
<br>
<body>
    <h1 align="center">FORM PENGAJUAN MAHASISWA AKTIF UNTUK KEPERLUAN KP, STA, TA, TUNJANGAN</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Tanggal Pengajuan :</td>
            <td ><p><?php echo $_POST['tanggal'];?></p></td>
        </tr>
        <tr>
            <td>NRP Pengaju Surat :</td>
            <td><?php echo $_POST['pengaju'];?></td>
        </tr>
        <tr>
            <td>Tugas Mata Kuliah dan Kodenya :</td>
            <td><?php echo $_POST['nama'];?> - <?php echo $_POST['kode'];?></td>
        </tr>
        <tr>
            <td>Surat Ditujukan Kepada Bapak / Ibu : </td>
            <td><?php echo $_POST['ditujukan'];?></td>
        </tr>
        <tr>
            <td>Jabatan Bapak / Ibu :</td>
            <td><?php echo $_POST['jabatan'];?></td>
        </tr>
        <tr>
            <td>Nama Perusahaan / Instansi : </td>
            <td><?php echo $_POST['instansi'];?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap Perusahaan / Instansi : </td>
            <td><?php echo $_POST['alamat'];?></td>
        </tr>
    </table>

    <br>
    <p align="center">Nama Dan NRP Anggota Kelompok</p>
    <br>

    <table  width="800" align="center" cellpadding = "10">

                <!----- nama dan nrp 1---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama1'];?>
                    <br>
                    <?php echo $_POST['nrp1'];?></td>
                    <!----- nama dan nrp 6---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama6'];?>
                    <br>
                    <?php echo $_POST['nrp6'];?></td>
                </tr>
                <!----- nama dan nrp 2---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama2'];?>
                    <br>
                    <?php echo $_POST['nrp2'];?></td>

                    <!----- nama dan nrp 7---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama7'];?>
                    <br>
                    <?php echo $_POST['nrp7'];?></td>
                </tr>
                <!----- nama dan nrp 3---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama3'];?>
                    <br>
                    <?php echo $_POST['nrp3'];?></td>
                    <!----- nama dan nrp 8---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama8'];?>
                    <br>
                    <?php echo $_POST['nrp8'];?></td>
                </tr>
                <!----- nama dan nrp 4---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama4'];?>
                    <br>
                    <?php echo $_POST['nrp4'];?></td>
                    <!----- nama dan nrp 9---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama9'];?>
                    <br>
                    <?php echo $_POST['nrp9'];?></td>
                </tr>
                <!----- nama dan nrp 5---------------------------------------------------------->
                <tr>
                    <td width="100">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama5'];?>
                    <br>
                    <?php echo $_POST['nrp5'];?></td>
                    <!----- nama dan nrp 10---------------------------------------------------------->
                    <td width="100" align="center">
                    Nama :
                    </br>
                    NRP :
                    </td>
                    <td><?php echo $_POST['nama10'];?>
                    <br>
                    <?php echo $_POST['nrp10'];?></td>
                </tr>
            </table>
    </body>
    
        <br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>
