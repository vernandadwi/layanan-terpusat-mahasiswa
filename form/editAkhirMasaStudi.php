<?php
  include '../util/utility.php';
  include '../dbFunction/dbFunction.php';
  session_start();
  $id=$_GET['id'];
  $fakultas = filter_input(INPUT_POST, "fakultas", FILTER_SANITIZE_SPECIAL_CHARS);
    $program_studi = filter_input(INPUT_POST, "jurusan", FILTER_SANITIZE_SPECIAL_CHARS);
    $program_pendidikan = filter_input(INPUT_POST, "progpen", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $tempat_lahir = filter_input(INPUT_POST, "tempat_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal_lahir = filter_input(INPUT_POST, "tanggal_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $user_nrp = $_SESSION['nrp'];
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $kota = filter_input(INPUT_POST, "kota", FILTER_SANITIZE_SPECIAL_CHARS);
    $kode_pos = filter_input(INPUT_POST, "kode", FILTER_SANITIZE_SPECIAL_CHARS);
    $no_hp = filter_input(INPUT_POST, "telp", FILTER_SANITIZE_SPECIAL_CHARS);
    $provinsi = filter_input(INPUT_POST, "provinsi", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $semester = filter_input(INPUT_POST, "semester", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun_akademik = filter_input(INPUT_POST, "tahun", FILTER_SANITIZE_SPECIAL_CHARS);
    $alasan = filter_input(INPUT_POST, "alasan", FILTER_SANITIZE_SPECIAL_CHARS); 
    editAkhirMasaStudi($fakultas, $program_studi, $program_pendidikan, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kota, $kode_pos, $no_hp, $provinsi, $email, $semester, $tahun_akademik, $alasan, $user_nrp,$id);
  header("location:../user/history.php");
 ?>
