<?php

$var1 = 10;
$var2 = 8.7;
$var3 = "d";
$var4 = 'q';
$var5 = 'hola';
$var6 = "mundo";

var_dump($var1, $var2, $var3, $var4, $var5, $var6);

$var1 = "cadena1 ";
$var5 = '7 ';
$var1 = "15";

echo $var1, $var5;


echo "<br />";
echo "<br />";
echo "<hr>";
echo "<br />";

$uno = "Tres ";
$dos = "tristes ";
$tres = "tigres ";
$cuatro = "tragan ";
$cinco = "trigo ";
$seis = "de ";
$siete = "un ";
$ocho = "trigal";

echo $uno, $dos, $tres, $cuatro, $cinco, $seis, $siete, $ocho;


echo "<br />";
echo "<br />";

echo $uno, $seis, "la tarde indica ", $siete, " reloj.";

echo "<br />";
echo "<br />";
echo "<hr>";
echo "<br />";

$variable01 = true;
$variable02 = false;
$variable03 = 0;
$variable04 = 1;
$variable05 = 6;
$variable06 = '';
$variable07 = "3";
$variable08 = "true";
$variable09 = 'false';
$variable10 = null;

function tipoDato($varN)
{

  if ($varN == true)
    {
      echo 'el valor ', $varN, ' es verdadero.';
    }
    else
    {
      echo 'el valor ', $varN, ' es falso.';
    }

}

tipoDato($variable10);

echo "<br />";
echo "<br />";
echo "<hr>";
echo "<br />";

$animales = [];
$animales[] = "perro,";
$animales[] = "gato,";
$animales[] = "caballo,";
$animales[] = "pato,";
$animales[] = "elefante,";

var_dump($animales);




echo "<br />";


$animales[] = "cebra,";
$animales[] = "leon.";

var_dump($animales);

echo "<br />";
echo "<br />";

echo "Me gustan los animales: ";

foreach ($animales as $animal) {
  echo $animal, " ";
}

echo "<br />";
echo "<br />";

$animales[0] = "conejo";

var_dump($animales[0]);

echo "<br />";
echo "<br />";

$animales[100] = "raton";

echo $animales[100];

echo "<br />";
echo "<br />";

$animales[16] = "jirafa";

var_dump($animales[16]);

echo "<br />";
echo "<br />";

echo "<hr/>";

echo "<br />";
echo "<br />";


$auto["Marca"] = "Ford";
$auto["Modelo"] = 2012;
$auto["Color"] = "Gris";
$auto["Anio"] = "2012";
$auto["Patente"] = "qhi890";

var_dump($auto);

echo "<br />";
echo "<br />";

$auto[0] = "Juan";

var_dump($auto[0]);

echo "<br />";
echo "<br />";

$auto[14] = "La caja";

var_dump($auto[14]);

echo "<br />";
echo "<br />";

$auto["Poliza"] = 118490;

var_dump($auto["Poliza"]);

echo "<br />";
echo "<br />";

$auto["Patente"] = "abc729";

var_dump($auto["Patente"]);

echo "<br />";
echo "<br />";

$auto[0] = "Carlos";

var_dump($auto["Patente"]);

echo "<br />";
echo "<br />";

echo "<hr />";

echo "<br />";
echo "<br />";

$entero = 8;
$decimal = 2.5;

echo $entero + $decimal;

echo "<br />";
echo "<br />";

echo $entero - $decimal;

echo "<br />";
echo "<br />";

echo $entero / $decimal;

echo "<br />";
echo "<br />";

echo $entero * $decimal;

echo "<br />";
echo "<br />";

$modulo = $entero % $decimal;;

echo $modulo;

echo "<br />";
echo "<br />";

$entero = $entero + 1;
$decimal = $decimal + 1;

$entero = $entero + 5;

$decimal = $decimal - 0.6;

$resultado = ($entero * 2 + $decimal) / ($entero * 50 / 100);

echo $resultado;

echo "<br />";
echo "<br />";

echo "<hr />";

echo "<br />";
echo "<br />";

$hola = "Hola ";
$mundo = "Mundo!";

echo $hola, $mundo;

echo "<br />";
echo "<br />";

echo $hola, $mundo, " ", "Que bueno esta PHP";

?>
