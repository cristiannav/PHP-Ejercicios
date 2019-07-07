<?php

for($i = 1; $i < 101; $i++){
  echo " $i";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$var = rand(0, 100);

for($i = 1; $i < $var; $i++){
  echo " $i";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";


for($i = 1; $i < 51; $i++){
  echo $i * 2;
  echo " ";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$ceca = 0;
$cara = 1;

$i = 0;
$contador = 0;

while(rand($ceca, $cara) == $ceca || rand($ceca, $cara) == $cara){
  rand($ceca, $cara);
  $i ++;
  if(rand($ceca, $cara) == $cara){
    $contador ++;
  }
  if ($contador == 5){
    break;
  }
}

echo $i;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$ceca = 0;
$cara = 1;

$i = 0;

do{
  if(rand($ceca, $cara) == $cara){
    break;
  }
  rand($ceca, $cara);
  $i ++;
  }while(rand($ceca, $cara) == $ceca || rand($ceca, $cara) == $cara);

echo $i;

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$nombres = ["Juan", "Pablo", "Ricardo", "Carlos", "Esteban"];

for ($i=0; $i<1; $i++){
  echo "$nombres[0], ";
  echo "$nombres[1], ";
  echo "$nombres[2], ";
  echo "$nombres[3], ";
  echo "$nombres[4].";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$nombres = ["Juan", "Pablo", "Ricardo", "Carlos", "Esteban"];

$i = 0;

while($i < 1){
  $i++;
  echo "$nombres[0], ";
  echo "$nombres[1], ";
  echo "$nombres[2], ";
  echo "$nombres[3], ";
  echo "$nombres[4].";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$nombres = ["Juan", "Pablo", "Ricardo", "Carlos", "Esteban"];

$i = 0;

do{
  $i++;
  echo "$nombres[0], ";
  echo "$nombres[1], ";
  echo "$nombres[2], ";
  echo "$nombres[3], ";
  echo "$nombres[4].";
}while($i < 1);

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$random = rand($numeros[0], $numeros[10]);

for($i = 0; $i < 1; $i ++){
  if($random == 5){
    echo "Se encontro un 5!";
  }
  else{
    echo $random;
  }
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$random = rand($numeros[0], $numeros[10]);

$i = 0;

while($i < 1){
  $i++;
  if($random == 5){
    echo "Se encontro un 5!";
  }
  else{
    echo $random;
  }
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$random = rand($numeros[0], $numeros[10]);

$i = 0;

do{
  $i++;
  if($random == 5){
    echo "Se encontro un 5!";
  }
  else{
    echo $random;
  }
}while($i < 1);

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$numeros = [0 => "a",1 => "b",2 => "c",3 => "d",4 => "e",5 => "f",6 => "g",7 => "h",8 => "i", 9 => "j",10 => "k",11 => "l",12 => "m",13 => "n",14 => "o"];

foreach (range($numeros[0], $numeros[14]) as $key => $value){
  echo "En la posicion $key se encuentra el valor $value <br/>";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$mascota = ["animal" => "perro", "edad" => 8, "altura" => 0.70, "nombre" => "tomas"];

foreach ($mascota as $key => $value) {
  echo "$key: $value <br/>";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$ceu = array("Italia" => "Roma", "Luxembourg" => "Luxembourg", "Belgica" => "Bruselas",
"Dinamarca" => "Copenhagen", "Finlandia" => "Helsinki", "Francia" => "Paris",
"Slovakia" => "Bratislava", "Eslovenia" => "Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda" => "Dublin", "Holanda" => "Amsterdam", "Portugal" => "Lisbon", "Espana" => "Madrid",
"Suecia" => "Stockholm", "Reino Unido" => "London", "Chipre" => "Nicosia", "Lithuania" => "Vilnius",
"Republica Checa" => "Prague", "Estonia" => "Tallin", "Hungria" => "Budapest", "Latvia" => "Riga",
"Malta" => "Valletta", "Austria" => "Vienna", "Polonia" => "Warsaw");

asort($ceu);

foreach ($ceu as $key => $value){
  echo "La capital de $key es $value <br/>";
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$ceu = [
        "Argentina" => ["Buenos Aires", "Cordoba", "Santa Fe"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $key => $value){
  echo "Las ciudades de $key son: <br/>";
  foreach ($value as $key1 => $value1){
    echo "$value1 <br/>";
  }
}

echo "<br />";
echo "<br />";
echo "<hr />";
echo "<br />";
echo "<br />";

$ceu = [
        "Argentina" => ["Buenos Aires", "Cordoba", "Santa Fe", "esAmericano"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

  foreach ($ceu as $key => $value){
    if($key == "Argentina" || $key == "Brasil" || $key == "Colombia"){
      echo "<strong> Las ciudades de $key son: </strong> <br/>";
      foreach ($value as $key1 => $value1){
        if($value[3] == "esAmericano"){
        echo "$value1ls <br/>";
        }
      }
    }
  }




?>
