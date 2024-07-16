<?php

@$respuesta = $_GET["r"];
@$correo = $_GET["m"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    
    <link rel="stylesheet" href="../css/cssdepura.css">
</head>

<body data-page="index">
   
    
<div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
            <input type="submit" value="Log In" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Full Name" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Sign up" class="forms_buttons-action">
          </div>
          <?php
                if ($respuesta == "1") {
                    echo '<div class="registro_exitoso" data-text="AlumnRegsOK1">Los datos se han registrado correctamente.</div>';
                } else {
                    echo '<div class="registro_error" data-text="AlumnRegsFa1">Error al registrar los datos.</div>';
                }
                ?>
                <br>
                <h1 class="mensajeok"><?php echo $correo; ?></h1>
                <br>
                <center><a href="../php/menu.php"><img src="../imagenes/cdb-fed-logo.png" width="200" height="200"></a></center>
                
        </form>
      </div>
    </div>
  </div>
</section>

</body>

</html>