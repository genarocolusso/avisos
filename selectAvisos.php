<?php
 
 $result = mysql_query("SELECT * FROM `avisos` WHERE DATE_FORMAT(NOW(), '%d') =  `dia` and DATE_FORMAT(NOW(), '%m') =  `mes` and DATE_FORMAT(NOW(), '%Y') =  `ano`") or die($result. "".mysql_error());



while($row = mysql_fetch_array($result)){

$titulo  = ucfirst($row['Titulo']);
$descricao = ucfirst($row['descricao']);
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