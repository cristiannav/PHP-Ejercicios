<?php

$name = $_POST['name'];
$edad = $_POST['Edad'];
$email = $_POST['email'];

echo "Muchas gracias por registrarte ", $name, ", nos has dicho que tienes ", $edad, " anios. <br/>",
"Hemos registrado tu email: ", $email, "<br/>¡Gracias!";

if($_POST["name"] == "" || $_POST["Edad"] == 0 || $_POST["sexo"] == "" || $_POST["email"] == "" || $_POST["username"] == "" || $_POST["password"] == ""){
  header("Location:registro_usuarios.php");exit;
}

 ?>
