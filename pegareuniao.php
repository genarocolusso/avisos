<?php include 'connect.php' ?>

<?php

$titulo = (ucfirst($_POST['titulo']));
$descricao = (ucfirst($_POST['descricao']));
 
 $hora = $_POST['hora'];
$min = $_POST['min'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];


 $datapostada = $ano."-".$mes."-".$dia." ".$hora.":".$min.":00";
 


 mysql_query("INSERT INTO avisos (titulo, descricao, data) VALUES ('$titulo', '$descricao', '$datapostada')") or die(mysql_error());

header("location:marcar.php");
?>