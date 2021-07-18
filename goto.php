<?php
session_start();
include '/util/utility.php';
include '/dbFunction/dbFunction.php';
    $newpass = filter_input(INPUT_POST, "passwordNew", FILTER_SANITIZE_SPECIAL_CHARS);
    $nrp = $_SESSION['nrp'];
    updatePassword($newpass, $nrp);
    header("location:../layananTerpusat/user/akses.php?navito=user");
?>