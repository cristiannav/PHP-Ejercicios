<?php

$funcionesEjecutadas;

include("funciones.php");
include("superficie.php");

function todoJunto($num1, $num2, $num3){

  if(mayor($num1, $num2, $num3) > $num2  && mayor($num1, $num2, $num3) > $num3){
    return circulo($num1);
  }
  if(mayor($num1, $num2, $num3) > $num1  && mayor($num1, $num2, $num3) > $num3){
    return circulo($num2);
  }
  if(mayor($num1, $num2, $num3) > $num1  && mayor($num1, $num2, $num3) > $num2){
    return circulo($num3);
  }
}

$todoJunto = todoJunto(7, 10, 28);

echo $todoJunto;
echo "<br />";
echo "<br />";
echo $funcionesEjecutadas;


echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


$string = "Me encanta php, A Mi tambien me encanta php!";

$clave = "php";

$pos = strpos($string, $clave);

echo $pos;


echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";




?>
