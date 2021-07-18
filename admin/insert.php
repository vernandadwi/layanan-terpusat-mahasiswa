<?php
require_once("../util/utility.php");




$insertSQL="INSERT INTO posting VALUES isi_artikel";

if (!mysql_query($insertSQL)) echo "Insert failed: $insertSQL <br />".
mysql_error()."<br /><br />";
 
?>
