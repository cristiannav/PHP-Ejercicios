<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura Categorias</title>
    <link rel="" />
  <head>
  <body>

<?php

$array = file_get_contents('categorias.json');
$array1 = json_decode($array, true);
/* print_r($array1['categorias']['4']);

echo "<br/>";
echo "<br/>";

*/
?>

<div id='lectura_categorias'>
    <form id='checkbox' action='' method='post'>
      <legend>Selecciona:</legend> <br/>

      <input type="checkbox" value=<?php $array1['categorias']['0']?> name="Deportes"> Deportes <br/>
      <input type="checkbox" value=<?php $array1['categorias']['1']?> name="Historia"> Historia <br/>
      <input type="checkbox" value=<?php $array1['categorias']['2']?> name="Espectaculos"> Espectaculos <br/>
      <input type="checkbox" value=<?php $array1['categorias']['3']?> name="Geografia"> Geografia <br/>
      <input type="checkbox" value=<?php $array1['categorias']['4']?> name="Arte"> Arte <br/>
    </form>
</div>








  </body
</html>
