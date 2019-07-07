<?php

/*Ejercicio 02 a */

function comprobar(){

  if(file_exists('texto.txt')){
    $texto = fopen('texto.txt', 'w+');
  }
  else{
    $texto = fopen('texto.txt', 'w+');
    fclose($texto);
  }
}

comprobar();

/*Ejercicio 02 b */

 for($i = 1; $i < 101; $i++){

   $texto = fopen('texto.txt', 'a');
   fwrite($texto, "Hola mundo! testing." .PHP_EOL);
   fclose($texto);

 }

/*Ejercicio 02 c */

$texto = fopen("texto.txt", "r");
if($texto){
  while(($linea = fgets($texto)) !== false){
    echo $linea;
  }
}

/*Ejercicio 02 d */

echo "<br/>";
echo "<br/>";

$texto = fopen("texto.txt", "r");
if($texto){
  while(($linea = fgets($texto)) !== false){
    echo $linea, "<br/>";
  }
}

/*Ejercicio 02 e */

unlink('texto.txt');

/*Ejercicio 02 f */

$texto2 = fopen('texto2.txt', 'a');
fwrite($texto2, "Hola nuevamente mundo!");
fclose($texto2);


/*Ejercicio 02 g */

$texto2 = fopen('texto2.txt', 'w');
fwrite($texto2, "¿Este texto pisa el anterior?" .PHP_EOL);
fclose($texto2);

/*Ejercicio 02 h */

$texto2 = fopen('texto2.txt', 'a');
fwrite($texto2, "YA NO!");
fclose($texto2);

?>
