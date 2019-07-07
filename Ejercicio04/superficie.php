<?php

function triangulo($base, $altura){

  $superficie = $base * ($altura / 2);

  return $superficie;

}

$variable1 = triangulo(6, 4);

echo $variable1;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

function rectangulo($base, $altura){

  $superficie =  $base * ($altura / 2);

  return $superficie;

}

$variable2 = rectangulo(12, 4);

echo $variable2;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

function cuadrado($base, $altura){

  $superficie = $base * ($altura / 2);

  return $superficie;

}

$variable3 = cuadrado(24, 4);

echo $variable3;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

function circulo($diametro){

  $radio = $diametro / 2;

  $area = pi() * ($radio ** 2);

  return $area;

}

$variable4 = circulo(38);

echo $variable4;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";







?>
