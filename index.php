<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horários - Reuniões</title>

<link rel="icon" type="image/png" href="icon.png" />
    <!-- Bootstrap -->
   <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href=" font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link href="style.css" rel="stylesheet">
   
<script src="jquery-1.9.1.js"></script>
 
 <script type="text/javascript">
 function startTime() {
     var today=new Date();
     var h=today.getHours();
     var m=today.getMinutes(); 
     var s=today.getSeconds();
     // add a zero in front of numbers<10
     m=checkTime(m);
     s=checkTime(s);
     document.getElementById('txt').innerHTML=h+":"+m+":"+s;
     t=setTimeout('startTime()',500);
 }

 function checkTime(i){
 if (i<10) {
     i="0" + i;
 }
     return i;
 }
 </script>

<script type="text/javascript">
 $(document).ready(function() {
   startTime();

 });
</script>

<script>



$( document ).ready(function() {


  
   function loop() 
    {
    // $(".tarefas .tarefalista").first().css("background-color", "#1b7ac3");

    $(".tarefas .tarefalista").first().css("opacity", "1");

  // $(".tarefas .tarefalista").first().delay( 2100 ).slideToggle(9000, function(){ 
  //  $(".tarefas").append("<div class='tarefalista'>"+$(".tarefas .tarefalista").first().html()+"</div>");

  $(".tarefas .tarefalista").first().delay( 6100 ).fadeOut(5000, function(){     
  $(".tarefas").append("<div class='tarefalista'>"+$(".tarefas .tarefalista").first().html()+"</div>");
  
  $(".tarefas .tarefalista").first().remove(); loop();});
    
    
    } 
   loop();

}); 

</script>
  

  </head>
  <body style="overflow: hidden;">
    <?php include 'connect.php' ?>
<div class="space"></div>

<div class="topo">
  <div class="nav">
  <div class="meioleft">
    <h4 style="font-size: 20px;margin-top: 14px;"> Agenda -  Hora Atual:
<span id="txt"  ></span>
</h4>
  </div>
    <div class="NEaD" style="margin-top:0px;"></div>
</div>
 </div>
    <div class="container ">


 <div class="ipad">
 

  <div class="tarefas">

    <?php include 'selectAvisos.php' ?> 
  </div>
  </div>



    </div>
    
 
   
  </body>
</html>