<?php
 
 $result = mysql_query("SELECT * FROM `avisos` ORDER BY data ") or die($result. "".mysql_error());



while($row = mysql_fetch_array($result)){

$titulo  = (ucfirst($row['Titulo']));
$descricao = (ucfirst($row['descricao']));
$data = $row['data'];
$idn = $row['id'];
 $timestamp = strtotime($data);
  echo ' <div class="bs-callout bs-callout-info" style="height: auto;  > ';
  echo '   <h1 style="font-size: 16px">'.$titulo.'</h1>';
  echo '   <h2 style="font-size: 12px">Dia: '.date('d-m-Y', $timestamp).' Hora: '.date('H:i', $timestamp).'</h2>';
  echo '   <p> '.$descricao.' </p> ';
  echo '   <a href="deleteAviso.php?id='.$idn.'"><p class="btn btn-danger"> Deletar </p></a>';
  echo ' </div> ';

}

 

?>