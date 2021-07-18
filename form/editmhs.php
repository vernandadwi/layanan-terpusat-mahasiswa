<?php
  include '../util/utility.php';
  include '../dbFunction/dbFunction.php';
  session_start();
  $id=$_GET['id'];
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
  editAktif($nama, $semester, $tahun_ajaran, $alamat_mhs, $no_hp, $surat_ditujukan, $jabatan, $nama_instansi, $alamat_instansi, $keperluan, $nama_ortu, $NIK, $alamat, $kota, $provinsi, $tanggal, $user_nrp,$id);
  header("location:../user/history.php");
 ?>
