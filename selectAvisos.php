<?php
 
 $result = mysql_query("SELECT * FROM `avisos` ORDER BY data ") or die($result. "".mysql_error());



while($row = mysql_fetch_array($result)){

$titulo  = (ucfirst($row['Titulo']));
$descricao = (ucfirst($row['descricao']));
$data = $row['data'];
 $timestamp = strtotime($data);
echo ' <div class="tarefalista "> ';
    echo '  <h1>'.$titulo.'</h1>';
   echo '   <h2>Dia: '.date('d-m-Y', $timestamp).'  Hora: '.date('H:i', $timestamp).'</h2>';
  echo '    <p> '.$descricao.' </p> ';
  echo '  </div> ';

}



 


?>