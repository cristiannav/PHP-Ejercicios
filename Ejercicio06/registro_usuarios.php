<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='confirmacion.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>


                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/><br/>                    <span id='register_name_errorloc' class='error'></span>
                </div>

                <div class='container' style='height:80px;'>
                  <label for='edades'> Edad:</label>
                  <select name='Edad'>
                    <?php
                    $edades = ["", 18, 100];
                    ?>
                    <?php foreach(range($edades[0], $edades[2]) as $edad){?>
                      <option value=<?php echo $edad ?>> <?php echo $edad; ?></option>
                    <?php } ?>
                  </select>
                </div>
                Sexo
                <br>
                Hombre
                <input type="checkbox" name="sexo">
                Mujer
                <input type="checkbox" name="sexo">
                <br> <br>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
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
                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>
            </fieldset>
          </form>
  </body>
</html>
