<?PHP

$error_mail = "Direccion invalida";
$usuarios = include("usuarios.php");
$post = include("post.php");
$array = array($array1, $array2, $array3, $array4);

if(isset($name) && preg_match('/^[a-z áéíóúñüÁÉÍÓÚÑÜ]+$/i',$name) &&
  isset($username) && strlen($username) > 0 && strlen($username) < 8 &&
  isset($email) && strlen($email)>0 && filter_var($email, FILTER_VALIDATE_EMAIL) ? 1 : 0 &&
  isset($password) && strlen($password)>0){
    $array1 = array_push($array, $name);
    $array2 = array_push($array, $username);
    $array3 = array_push($array, $email);
    $array4 = array_push($array, $password);
    file_put_contents("usuarios.php", $array, FILE_APPEND | LOCK_EX);
    header("Location:felicitaciones.html");exit;
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='register.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" />
                    <?php if(isset($_POST["email"]) && strlen($_POST["email"]) > 0 && strlen($_POST["email"]) < 6
                    && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? 1 : 0){
                      echo $error_mail;
                    } ?>
                    <br/>
                    <span id='register_email_errorloc' class='error'></span>

                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div><br/>
                </div>

                <?php
                  if(!isset($_GET['versionCorta'])){
                    include("container2.php");
                  }
                ?>

                <?php
                $paises = ["Argentina", "Brasil", "Uruguay", "Estados Unidos", "Suiza", "Grecia", "Portugal", "Francia", "Italia", "Japon"];
                ?>

                <div class='container' style='height:80px;'>
                  <label for='paises'> Pais:</label><br/>
                  <select name='pais'>
                    <option value='ar'><?php echo $paises[0];?></option>
                    <option value='br'><?php echo $paises[1];?></option>
                    <option value='ur'><?php echo $paises[2];?></option>
                    <option value='us'><?php echo $paises[3];?></option>
                    <option value='sz'><?php echo $paises[4];?></option>
                    <option value='gr'><?php echo $paises[5];?></option>
                    <option value='por'><?php echo $paises[6];?></option>
                    <option value='fr'><?php echo $paises[7];?></option>
                    <option value='it'><?php echo $paises[8];?></option>
                    <option value='ja'><?php echo $paises[9];?></option>
                  </select>
                </div>


                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>


    </body>
</html>
