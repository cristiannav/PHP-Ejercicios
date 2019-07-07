<?php

/* Ejercicio 04 a*/

function string1(){

  $string1 = "Hola mundo";

  echo $string1;

}

string1();


echo "<br/>";
echo "<br/>";

/* Ejercicio 04 b*/

function string2(){

  $string2 = "Hola mundo";
  $md5 = md5($string2);

  echo $md5;

}

string2();

echo "<br/>";
echo "<br/>";

/* Ejercicio 04 c*/

function string3(){

  $string3 = "Hola mundo";
  $sha1 = sha1($string3);

  echo $sha1;

}

string3();

echo "<br/>";
echo "<br/>";


/* Ejercicio 04 d*/

function string4(){

  $string4 = "Hola mundo";
  $hash1 = password_hash($string4, PASSWORD_DEFAULT);

  echo $hash1;

}

string4();

echo "<br/>";
echo "<br/>";


/* Ejercicio 04 e*/

function string5(){

  $string5 = "Hola mundo";
  $hash2 = password_hash($string5, PASSWORD_BCRYPT);

  echo $hash2;

}

string5();

echo "<br/>";
echo "<br/>";

/*Ejercicio 04 f  php 7.0 No utiliza la opcion salt

function string6(){

  $string6 = "Hola mundo";
  $opciones = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
  $hash3 = password_hash($string6, PASSWORD_BCRYPT, $opciones);

  echo $hash3;

}

string6();

echo "<br/>";
echo "<br/>";

*/

/*Ejercicio 04 g */

$verify1 = string2();
$verify2 = string3();
$verify3 = string4();
$verify4 = string5();

password_verify("Hola mundo", $verify1);
echo "<br/>";
echo "<br/>";
password_verify("Hola mundo", $verify2);
echo "<br/>";
echo "<br/>";
password_verify("Hola mundo", $verify3);
echo "<br/>";
echo "<br/>";
password_verify("Hola mundo", $verify4);

 ?>
