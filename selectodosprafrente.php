<?php
 
 $result = mysql_query("SELECT * FROM `avisos` WHERE `mes`  >= DATE_FORMAT(NOW(), '%m') and   `ano` >= DATE_FORMAT(NOW(), '%Y') ") or die($result. "".mysql_error());



while($row = mysql_fetch_array($result)){

$titulo  = utf8_encode (ucfirst($row['Titulo']) );
$descricao = utf8_encode (ucfirst($row['descricao']) );
$hora = $row['hora'];
$min = $row['min'];
$dia = $row['dia'];
$mes = $row['mes'];
$ano = $row['ano'];


echo ' <div class="tarefalista "> ';
    echo '  <h1>'.$titulo.'</h1>';
   echo '   <h2>Dia: '.$dia.'/'.$mes.'/'.$ano.' - Hora: '.$hora.':'.$min.'</h2>';
  echo '    <p> '.$descricao.' </p> ';
  echo '  </div> ';

}



 


?>