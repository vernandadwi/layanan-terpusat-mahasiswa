<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
    $judul_artikel = filter_input(INPUT_POST, "judul", FILTER_SANITIZE_SPECIAL_CHARS);
    $tgl_artikel = filter_input(INPUT_POST, "tanggal", FILTER_SANITIZE_SPECIAL_CHARS);
    $isi_artikel=filter_input(INPUT_POST, "isi", FILTER_SANITIZE_SPECIAL_CHARS);;
    addPosting($judul_artikel, $isi_artikel, $tgl_artikel);
    header("location:../admin/posting.php");
?>
