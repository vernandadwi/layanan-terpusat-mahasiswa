<?php

include '../util/utility.php';
include '../dbFunction/dbFunction.php';
    $fakultas = filter_input(INPUT_POST, "fakultas", FILTER_SANITIZE_SPECIAL_CHARS);
    $program_studi = filter_input(INPUT_POST, "jurusan", FILTER_SANITIZE_SPECIAL_CHARS);
    $program_pendidikan = filter_input(INPUT_POST, "progpen", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $tempat_lahir = filter_input(INPUT_POST, "tempat_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal_lahir = filter_input(INPUT_POST, "tanggal_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $kota = filter_input(INPUT_POST, "kota", FILTER_SANITIZE_SPECIAL_CHARS);
    $kode_pos = filter_input(INPUT_POST, "kode", FILTER_SANITIZE_SPECIAL_CHARS);
    $no_hp = filter_input(INPUT_POST, "telp", FILTER_SANITIZE_SPECIAL_CHARS);
    $provinsi = filter_input(INPUT_POST, "provinsi", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun_akademik = filter_input(INPUT_POST, "tahun", FILTER_SANITIZE_SPECIAL_CHARS);
    $alasan = filter_input(INPUT_POST, "alasan", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal = date('Y-m-d');
    addAkhirMasaStudi($fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,"Belum di proses",$tanggal);
?>
<link rel="stylesheet" href="../css/addUser.css">

<br>
<br>
<br>
<br>
<body>
    <h1 align="center">FORM PENGAJUAN MAHASISWA AKHIR MASA STUDI</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Fakultas :</td>
            <td ><p><?php echo $_POST['fakultas'];?></p></td>
        </tr>
        <tr>
            <td>Jurusan / Prog.Stud :</td>
            <td><?php echo $_POST['jurusan'];?></td>
        </tr>
        <tr>
            <td>Program Pendidikan :</td>
            <td><?php echo $_POST['progpen'];?></td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td><?php echo $_POST['nama'];?></td>
        </tr>
        <tr>
            <td>Tempat & Tanggal Lahir : </td>
            <td><?php echo $_POST['tempat_lahir'];?>-<?php echo $_POST['tanggal_lahir'];?></td>
        </tr>
        <tr>
            <td>Nomor Pokok (NRP) :</td>
            <td><?php echo $_POST['nrp'];?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap : </td>
            <td><?php echo $_POST['alamat'];?>
             Kota :<?php echo $_POST['kota'];?>
             Kode Pos :<?php echo $_POST['kode'];?>
             Telpon:<?php echo $_POST['telp'];?>
             Provinsi: <?php echo $_POST['provinsi'];?>
             Email : <?php echo $_POST['email'];?>
            </td>
        </tr>
        <tr>
            <td>Mulai mengundurkan diri : </td>
            <td><?php echo $_POST['semester'];?>
            Tahun Akademik: <?php echo $_POST['tahun'];?>
            </td>
        </tr>
        <tr>
            <td>Alasan pengunduran diri : </td>
            <td><p><?php echo $_POST['alasan'];?></p></td>
        </tr>
    </table>
    </body>
    
    <br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>
