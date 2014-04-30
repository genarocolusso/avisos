<?php
 
 $iddelete = $_GET["id"];
 
 include 'connect.php'; 

$result = mysql_query("DELETE FROM `avisos`.`avisos` WHERE `avisos`.`id` = $iddelete") or die($result. "".mysql_error());

header('location:marcar.php');  

?><?php include 'marcar.php' ?>