<?PHP

$error = "Direccion invalida";

if(isset($_POST["name"]) && strlen($_POST["name"])>0
&& isset($_POST["username"]) && strlen($_POST["username"])>0
&& isset($_POST["email"]) && strlen($_POST["email"])>0
&& filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? 1 : 0
&& isset($_POST["password"]) && strlen($_POST["password"])>0){
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

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" />
                    <?php if(isset($_POST["email"]) && strlen($_POST["email"])>0
                    && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? 1 : 0){
                      echo $error;
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
