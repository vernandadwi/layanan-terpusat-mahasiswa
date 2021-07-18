<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
session_start();
$judul_artikel = filter_input(INPUT_POST, "judul", FILTER_SANITIZE_SPECIAL_CHARS);
$tgl_artikel = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
$isi_artikel= $_POST['isi'];
$id = $_GET['id'];
echo "$judul_artikel";
echo "$tgl_artikel";
echo "$isi_artikel";
echo "$id";
updatePosting($judul_artikel, $isi_artikel, $tgl_artikel,$id);
header("location:./historyposting.php");
?>
