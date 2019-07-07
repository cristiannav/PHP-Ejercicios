<?php

$var1 = 18;
$var2 = 10;

if ($var1 > $var2){

  echo "El numero mayor es 18";

}

echo "<br />";
echo "<br />";

$var1 = 20;
$var2 = 24;


if ($var1 > $var2){

  echo "El numero mayor es 24";

}

else {

  echo "El numero menor es 20";

}


echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


$x = 1;
$y = 5;

$random = rand($x, $y);

if($random == 3 || $random == 5){
  echo $random;
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$x = 1;
$y = 5;

$random = rand($x, $y);

if($random == 3){
  echo 3;
}
else{
  echo "El numero NO es 3";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$x = 1;
$y = 100;

$random = rand($x, $y);

if($random > 50){
  echo "El numero es mayor a 50";
}
else{
  echo "El numero es menor a 50";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$X = 0;
$Y = 100;

$random = rand($x, $y);

if($random > 50 && $random * 2){
  echo "El numero pasa la condicion";
}
else{
  echo "El numero NO pasa la condicion";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$edad = rand(1, 100);
$casado = False;
$sexo = "Masculino";

if($edad > 18 && $casado == False){
  echo "Bienvenido";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$Masculino = 0;
$Femenino = 1;
$Otro = 2;

$edad = rand(1, 100);
$casado = False;
$sexo = [$Masculino, $Femenino, $Otro];

$random = rand($Masculino, $Otro);

if($random == 2){
  echo "Bienvenido";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$cantidadDeAlumnos = 29;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$cantidadDeAlumnos = -100;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


$cantidadDeAlumnos = -1;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


$cantidadDeAlumnos = 0;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


$cantidadDeAlumnos = 1;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$cantidadDeAlumnos = 100;

if($cantidadDeAlumnos){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

if($i = 1){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

if($i = 0){
  echo "true";
}
else{
  echo "false";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numero = 2;

$ternario = ($numero * 2)?'El numero es par':'El numero es impar';

echo $ternario;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$i = rand(1, 5);

switch ($i) {
  case 1:
    echo "i es igual a X";
    break;
  case 2:
    echo "i es igual a X";
    break;
  case 3:
    echo "i es igual a X";
    break;
  case 4:
    echo "i es igual a X";
    break;
  case 5:
    echo "i es igual a X";
    break;
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$i = rand(1, 5);

switch ($i) {
  case 1:
    echo "i es igual a X";
    break;
  case 2:
    echo "i es igual a X";
    break;
  case 3:
    echo "NO es igual a 1 o 2";
    break;
  case 4:
    echo "NO es igual a 1 o 2";
    break;
  case 5:
    echo "NO es igual a 1 o 2";
    break;
}



 ?>
