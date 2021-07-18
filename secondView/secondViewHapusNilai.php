<?php
session_start();
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
include '../header/headerForm.php';
$nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $no_hp = filter_input(INPUT_POST, "telpon", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal_pengajuan = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK1 = filter_input(INPUT_POST, "Kode1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama1 = filter_input(INPUT_POST, "Nama1", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai1 = filter_input(INPUT_POST, "nilai1", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester1 = filter_input(INPUT_POST, "semester1", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK2 = filter_input(INPUT_POST, "Kode2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama2 = filter_input(INPUT_POST, "Nama2", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai2 = filter_input(INPUT_POST, "nilai2", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester2 = filter_input(INPUT_POST, "semester2", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK3 = filter_input(INPUT_POST, "Kode3", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama3 = filter_input(INPUT_POST, "Nama3", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai3 = filter_input(INPUT_POST, "nilai3", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester3 = filter_input(INPUT_POST, "semester3", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK4 = filter_input(INPUT_POST, "Kode4", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama4 = filter_input(INPUT_POST, "Nama4", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai4 = filter_input(INPUT_POST, "nilai4", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester4 = filter_input(INPUT_POST, "semester4", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK5 = filter_input(INPUT_POST, "Kode5", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama5 = filter_input(INPUT_POST, "Nama5", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai5 = filter_input(INPUT_POST, "nilai5", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester5 = filter_input(INPUT_POST, "semester5", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK6 = filter_input(INPUT_POST, "Kode6", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama6 = filter_input(INPUT_POST, "Nama6", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai6 = filter_input(INPUT_POST, "nilai6", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester6 = filter_input(INPUT_POST, "semester6", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK7 = filter_input(INPUT_POST, "Kode7", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama7 = filter_input(INPUT_POST, "Nama7", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai7 = filter_input(INPUT_POST, "nilai7", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester7 = filter_input(INPUT_POST, "semester7", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK8 = filter_input(INPUT_POST, "Kode8", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama8 = filter_input(INPUT_POST, "Nama8", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai8 = filter_input(INPUT_POST, "nilai8", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester8 = filter_input(INPUT_POST, "semester8", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK9 = filter_input(INPUT_POST, "Kode9", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama9 = filter_input(INPUT_POST, "Nama9", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai9 = filter_input(INPUT_POST, "nilai9", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester9 = filter_input(INPUT_POST, "semester9", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodeMK10 = filter_input(INPUT_POST, "Kode10", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama10 = filter_input(INPUT_POST, "Nama10", FILTER_SANITIZE_SPECIAL_CHARS);
    $nilai10 = filter_input(INPUT_POST, "nilai10", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester10 = filter_input(INPUT_POST, "semester10", FILTER_SANITIZE_SPECIAL_CHARS);
    addIHapusNilai1($nama, $email, $no_hp, $tanggal_pengajuan, $kodeMK1, $nama1, $nilai1, $semester1,$kodeMK2,$nama2,$nilai2,$semester2,$kodeMK3,$nama3,$nilai3,$semester3,$kodeMK4,$nama4,$nilai4,$semester4,$kodeMK5,$nama5,$nilai5,$semester5,$user_nrp,'Belum di proses');
    addIHapusNilai2($kodeMK6, $nama6, $nilai6, $semester6,$kodeMK7,$nama7,$nilai7,$semester7,$kodeMK8,$nama8,$nilai8,$semester8,$kodeMK9,$nama9,$nilai9,$semester9,$kodeMK10,$nama10,$nilai10,$semester10,$user_nrp);
?>

<link rel="stylesheet" href="../css/addUser.css">

<br>
<br>
<br>
<br>
<body>
    <h1 align="center">FORM PENGAJUAN HAPUS NILAI</h1>
    <table border="1" align="center" width="800px" height="500px">
        <tr >
            <td width="300px">Tanggal Pengajuan :</td>
            <td ><p><?php echo $_POST['tanggal'];?></p></td>
        </tr>
        <tr>
            <td>NRP Pengaju Surat :</td>
            <td><?php echo $_POST['nrp'];?></td>
        </tr>
        <tr>
            <td>Nama Pengaju Surat :</td>
            <td><?php echo $_POST['nama'];?></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><?php echo $_POST['email'];?></td>
        </tr>
        <tr>
            <td>No.Telp / HP : </td>
            <td><?php echo $_POST['telpon'];?></td>
        </tr>
    </table>

    <br>
    <p align="center">MataKuliah Yang Ingin Dihapus</p>
    <br>

    <table  width="800" align="center" cellpadding = "10" border="1">

                <!----- 1 ---------------------------------------------------------->
                    <tr>
                            <td>No</td>
                            <td>Kode Matakuliah</td>
                            <td>Nama MataKuliah</td>
                            <td>Nilai</td>
                            <td>Semester</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td><?php echo $_POST['Kode1'];?></td>
                            <td><?php echo $_POST['Nama1'];?></td>
                            <td><?php echo $_POST['nilai1'];?></td>
                            <td><?php echo $_POST['semester1'];?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $_POST['Kode2'];?></td>
                            <td><?php echo $_POST['Nama2'];?></td>
                            <td><?php echo $_POST['nilai2'];?></td>
                            <td><?php echo $_POST['semester2'];?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $_POST['Kode3'];?></td>
                            <td><?php echo $_POST['Nama3'];?></td>
                            <td><?php echo $_POST['nilai3'];?></td>
                            <td><?php echo $_POST['semester3'];?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?php echo $_POST['Kode4'];?></td>
                            <td><?php echo $_POST['Nama4'];?></td>
                            <td><?php echo $_POST['nilai4'];?></td>
                            <td><?php echo $_POST['semester4'];?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><?php echo $_POST['Kode5'];?></td>
                            <td><?php echo $_POST['Nama5'];?></td>
                            <td><?php echo $_POST['nilai5'];?></td>
                            <td><?php echo $_POST['semester5'];?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><?php echo $_POST['Kode6'];?></td>
                            <td><?php echo $_POST['Nama6'];?></td>
                            <td><?php echo $_POST['nilai6'];?></td>
                            <td><?php echo $_POST['semester6'];?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><?php echo $_POST['Kode7'];?></td>
                            <td><?php echo $_POST['Nama7'];?></td>
                            <td><?php echo $_POST['nilai7'];?></td>
                            <td><?php echo $_POST['semester7'];?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><?php echo $_POST['Kode8'];?></td>
                            <td><?php echo $_POST['Nama8'];?></td>
                            <td><?php echo $_POST['nilai8'];?></td>
                            <td><?php echo $_POST['semester8'];?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><?php echo $_POST['Kode9'];?></td>
                            <td><?php echo $_POST['Nama9'];?></td>
                            <td><?php echo $_POST['nilai9'];?></td>
                            <td><?php echo $_POST['semester9'];?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td><?php echo $_POST['Kode10'];?></td>
                            <td><?php echo $_POST['Nama10'];?></td>
                            <td><?php echo $_POST['nilai10'];?></td>
                            <td><?php echo $_POST['semester10'];?></td>
                        </tr>
    </table>
    </body>
    
    <br>
<a href="../user/history.php" class="action-button shadow animate blue">History</a>