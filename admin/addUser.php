<?php
include '../util/utility.php';
include '../dbFunction/dbFunction.php';
if(isset($_POST['aksi'])) {
    $nrp = filter_input(INPUT_POST, "nrp", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
    $fakultas = filter_input(INPUT_POST, "fakultas", FILTER_SANITIZE_SPECIAL_CHARS);
    $prodi = filter_input(INPUT_POST, "progstud", FILTER_SANITIZE_SPECIAL_CHARS);
    $progpend = filter_input(INPUT_POST, "progpen", FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpt_lahir = filter_input(INPUT_POST, "tempat_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $tgl_lahir = filter_input(INPUT_POST, "tanggal_lahir", FILTER_SANITIZE_SPECIAL_CHARS);
    $alamat = filter_input(INPUT_POST, "alamat", FILTER_SANITIZE_SPECIAL_CHARS);
    $nohp = filter_input(INPUT_POST, "no_hp", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $roleidRole = filter_input(INPUT_POST, "id_role", FILTER_SANITIZE_SPECIAL_CHARS);
    addUser($nrp, $nama, $pass, $fakultas, $prodi, $progpend, $tmpt_lahir, $tgl_lahir, $alamat, $nohp, $email, $roleidRole);
    header("location:dataAdmin.php?navito=user");
}
?>

