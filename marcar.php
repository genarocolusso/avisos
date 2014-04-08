<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horários - Reuniões</title>

    <!-- Bootstrap -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet"> 
   
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href=" font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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


</script>
  

  </head>
  <body>
    <?php include 'connect.php' ?>
    <?php 
    
    ?>
<div class="space"></div>

    <div class="container ">





<div class="bs-callout bs-callout-info">
  <div class="meioleft">
    <h4> Agenda     </h4>
    
  <p>Hora Atual:
<span id="txt" style="font-weight: bold"></span>
</p>
  </div>
    <div class="NEaD" style="margin-top: 0px;"></div>
</div>

   
<div class="bs-calloutMARCAR bs-callout-info">
<form  role="form" method="post" action="pegareuniao.php" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Marcar Reunião</legend>

<!-- Text input-->
<div class="left">
<div class="control-group">
  <label class="control-label" for="Titulo">Título</label>
  <div class="controls">
    <input id="Titulo" name="titulo" type="text" placeholder="título" class="input-xlarge">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="decricao">Descricao</label>
  <div class="controls">                     
    <textarea id="descricao" name="descricao">descrição</textarea>
  </div>
</div>
</div>
<div class="left">
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="Dia">Dia</label>
  <div class="controls">
    <select id="Dia" name="dia" class="input-xlarge">
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="mes">Mês</label>
  <div class="controls">
    <select id="mes" name="mes" class="input-xlarge">
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="ano">Ano</label>
  <div class="controls">
    <select id="ano" name="ano" class="input-xlarge">
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
    </select>
  </div>
</div>
 </div>
 <div class="left">
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="hora">Hora</label>
  <div class="controls">
    <select id="hora" name="hora" class="input-xlarge">
      <option>00</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="minuto">Minutos</label>
  <div class="controls">
    <select id="minuto" name="min" class="input-xlarge">
      <option>00</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
      <option>32</option>
      <option>33</option>
      <option>34</option>
      <option>35</option>
      <option>36</option>
      <option>37</option>
      <option>38</option>
      <option>39</option>
      <option>40</option>
      <option>41</option>
      <option>42</option>
      <option>43</option>
      <option>44</option>
      <option>45</option>
      <option>46</option>
      <option>47</option>
      <option>48</option>
      <option>49</option>
      <option>50</option>
      <option>51</option>
      <option>52</option>
      <option>53</option>
      <option>54</option>
      <option>55</option>
      <option>56</option>
      <option>57</option>
      <option>58</option>
      <option>59</option>
    </select>
  </div>
</div>
</div>
<!-- Button -->

<div class="control-group  botaomarcaaviso"    >
  <label class="control-label" for="marcarreuniao"></label>
  <div class="controls">
     <button type="submit" class="btn btn-default btn-primary" id="marcarreuniao" name="marcarreuniao"><span class="glyphicon glyphicon-pushpin"></span> Marcar Reunião</button>
  </div>
</div>

</fieldset>
</form>


    </div>
    </div>
 
   
  </body>
</html>