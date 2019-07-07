<?php

function mayor($num1, $num2, $num3){
  global $funcionesEjecutadas;
  $funcionesEjecutadas = 0;
  if($num1 > $num2 && $num1 > $num3){
    $funcionesEjecutadas++;
    return $num1;
  }
  else if($num2 > $num1 && $num2 > $num3){
    $funcionesEjecutadas++;
    return $num2;
  }
  else if($num3 > $num1 && $num3 > $num2){
    $funcionesEjecutadas++;
    return $num3;
  }
}

$numero = mayor(7, 10, 19);

echo $numero;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

function tabla($base, $limite){

  $secuencia = [];
  foreach(range($base, $limite) as $secuencia){
    var_dump($secuencia);
  }
}

tabla(1, 15);


echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numeroMagico = 19;

function mayor2($num1, $num2){

  global $numeroMagico;


  if($num1 > $num2 && $num1 > $numeroMagico){
    return $num1;
  }
  else if($num2 > $num1 && $num2 > $numeroMagico){
    return $num2;
  }
  else if($numeroMagico > $num1 && $numeroMagico > $num2){
    return $numeroMagico;
  }
}

$numero = mayor2(7, 10);

echo $numero;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

function tabla2($base){

  global $numeroMagico;

  $secuencia = [];
  foreach(range($base, $numeroMagico) as $secuencia){
    var_dump($secuencia);
  }
}

tabla2(1);


echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";















?>
