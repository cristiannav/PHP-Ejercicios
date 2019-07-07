<!DOCTYPE HTML>
<html>
<body>

<form action="imprimir.php" method="post">
  Nombre: <input type="text" name="nombre"><br>
  E-mail: <input type="text" name="email">
  <br> <br>

  ¿Como te enteraste de este sitio?
  <br>
  Por un amigo
  <input type="checkbox" name="sitio">
  Por internet
  <input type="checkbox" name="sitio">
  Por la TV
  <input type="checkbox" name="sitio">
  <br> <br>

  Sexo
  <br>
  Hombre
  <input type="radio" name="sexo">
  Mujer
  <input type="radio" name="sexo">
  <br> <br>

  ¿Como dormiste anoche?
  <br>
  <select name="dormir">
    <option value="uno"> 1 </option>
    <option value="dos"> 2 </option>
    <option value="tres"> 3 </option>
    <option value="cuatro"> 4 </option>
    <option value="cinco"> 5 </option>
    <option value="seis"> 6 </option>
    <option value="siete"> 7 </option>
    <option value="ocho"> 8 </option>
    <option value="nueve"> 9 </option>
    <option value="diez"> 10 </option>
  </select>
  <br> <br>

  Terminos y condiciones
  <br>
  <input type="checkbox" name="terminos">
  <br> <br>

  <input type="submit">


</form>

</body>

</html>
