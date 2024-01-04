<!DOCTYPE html>
<html>
<head>
    <title>contador</title>
    <meta charset="UTF-8">
    <meta http-equib="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
</head>
<body>
  <h1>Visitas</h1>
<?php
  if(isset($_COOKIE['visita'])){
    $visita = $_COOKIE['visita'] + 1;
    setcookie('visita', $visita, time()+3600);
    echo "Es tu visita N.".$visita;
  }else{
    $visita = 1;
    setcookie('visita', $visita, time()+3600);
    echo "Es tu primera visita";
  }


?>
  

</body>
</html>
