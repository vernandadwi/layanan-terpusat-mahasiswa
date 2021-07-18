<?php
session_start();
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';

    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun_ajaran = filter_input(INPUT_POST, "tahun_ajaran", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat_mhs = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $no_hp = filter_input(INPUT_POST, "telpon", FILTER_SANITIZE_SPECIAL_CHARS);
    $surat_ditujukan = filter_input(INPUT_POST, "ditujukan", FILTER_SANITIZE_SPECIAL_CHARS);
    $jabatan = filter_input(INPUT_POST, "jabatan", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama_instansi = filter_input(INPUT_POST, "instansi", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat_instansi = filter_input(INPUT_POST, "alamat_instansi", FILTER_SANITIZE_SPECIAL_CHARS);
    $keperluan = filter_input(INPUT_POST, "keperluan", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama_ortu = filter_input(INPUT_POST, "nama_ortu", FILTER_SANITIZE_SPECIAL_CHARS);
    $NIK = filter_input(INPUT_POST, "nik", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat_ortu", FILTER_SANITIZE_SPECIAL_CHARS);
    $kota = filter_input(INPUT_POST, "kota", FILTER_SANITIZE_SPECIAL_CHARS);
    $provinsi = filter_input(INPUT_POST, "provinsi", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = $_SESSION['nrp'];
    addAktif($nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,'Belum di proses');
?>
<head>
    <link rel="stylesheet" href="../css/addUser.css">
</head>
<br>
<br>
<br>
<br>
<body>
    <h1 align="center">FORMULIR PENGAJUAN MAHASISWA AKTIF</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Tanggal Pengajuan :</td>
            <td ><p><?php echo $_POST['tanggal'];?></p></td>
        </tr>
        <tr>
            <td>Nama Lengkap Mahasiswa :</td>
            <td><?php echo $_POST['nama'];?></td>
        </tr>
        <tr>
            <td>NRP Mahasiswa :</td>
            <td><?php echo $_POST['nrp'];?></td>
        </tr>
        <tr>
            <td>Semester Ganjil / Genap : </td>
            <td><?php echo $_POST['semester'];?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran :</td>
            <td><?php echo $_POST['tahun_ajaran'];?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap Mahasiswa di Bandung : </td>
            <td><?php echo $_POST['alamat'];?></td>
        </tr>
        <tr>
            <td>No Telpon / HP Mahasiswa : </td>
            <td><?php echo $_POST['telpon'];?></td>
        </tr>
        <tr>
            <td>Surat Ditujukan Kepada Nama Bapak / Ibu : </td>
            <td><p><?php echo $_POST['ditujukan'];?></p></td>
        </tr>
        <tr>
            <td>Jabatan Bapak / Ibu Tersebut : </td>
            <td><p><?php echo $_POST['jabatan'];?></p></td>
        </tr>
        <tr>
            <td>Nama Instansi atau Perusahaan : </td>
            <td><?php echo $_POST['instansi'];?></td>
        </tr>
        <tr>
            <td>Alamat Instansi atau Perusahaan : </td>
            <td><?php echo $_POST['alamat_instansi'];?></td>
        </tr>
        <tr>
            <td>Untuk Keperluan Pengajuan : </td>
            <td><?php echo $_POST['keperluan'];?></td>
        </tr>
    </table>
    
    <br>
    <p align="center">Data dibawah ini mohon dilengkapi apabila surat ditujukan untuk keperluan Tunjangan</p>
    <br>
    
    <table border="1" align="center" width="800px" height="170px">
        <tr>
            <td width="300px">Nama Lengkap OrangTua : </td>
            <td><?php echo $_POST['nama_ortu'];?></td>
        </tr>
        <tr>
            <td>NIK / NIP (Nomor Induk Kepegawaian) : </td>
            <td><?php echo $_POST['nik'];?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap OrangTua : </td>
            <td><?php echo $_POST['alamat_ortu'];?></td>
        </tr>
        <tr>
            <td>Kota-Provinsi : </td>
            <td><?php echo $_POST['kota'];?>-<?php echo $_POST['provinsi'];?></td>
        </tr>
    </table>
    </body>
    
        <br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>
    
    


