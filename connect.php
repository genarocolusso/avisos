<?php
// Create connection
$con=mysql_connect('localhost','root','legal22') or die(mysql_error());
$db = mysql_select_db("avisos");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>