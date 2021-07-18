<?php

function createMySQLConnection() {
    $link = mysqli_connect("localhost", "root", "",
            "kplayananterpusat") or die(mysqli_connect_error());
    mysqli_autocommit($link, FALSE);
    return $link;
}

?>