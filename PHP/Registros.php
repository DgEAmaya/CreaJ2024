<?php
// incluir la clase db_connect
require_once __DIR__ . '/conexionn.php';

function validate($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // conectar a la base de datos

    $bs = new DB_CONNECT();
    $conn = $bs->connect();     

    $PrimerNombre = validate($_POST['PrimerNombre']);
    $SegundoNombre = validate($_POST['SegundoNombre']);
    $PrimerApellido = validate($_POST['PrimerApellido']);
    $SegundoApellido = validate($_POST['SegundoApellido']);
    $direccion = validate($_POST['direccion']);
    $telefono = validate($_POST['telefono']);
    $dui = validate($_POST['dui']);
    $email = validate($_POST['email']);
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    $verificar_contraseña = validate($_POST['verificar_contraseña']);

    if (!preg_match("/^[a-zA-Z]+$/", $PrimerNombre)) {
        $errors[] = "El nombre solo debe contener caracteres alfabéticos.";
    }
    if (!preg_match("/^[a-zA-Z]+$/", $SegundoNombre)) {
        $errors[] = "El nombre solo debe contener caracteres alfabéticos.";
    }
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/", $PrimerApellido)) {
        $errors[] = "El apellido solo debe contener caracteres alfabéticos y tildes.";
    }
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ]+$/", $SegundoApellido)) {
        $errors[] = "El apellido solo debe contener caracteres alfabéticos y tildes.";
    }

     if (!preg_match("/^[\d\-\+]{1-13}$/", $telefono)) {
        $errors[] = "El número telefónico debe tener máximo 12 caracteres, y solo puede contener dígitos, guiones (-) y signos más (+).";
    }
    

    // Voy a Validar que el correo no este registrado
    $sql = "SELECT email FROM cliente WHERE email='$email';";
    $result = mysqli_query($bs->myconn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="registro_advertencia"><a data-text="MsgEmailNoReg1">El correo</a>&nbsp;<b>' . $email . '</b><a data-text="MsgEmailYaReg2">, ya esta registrado, Verifique!.</a></div>';
    } else {

        // Voy a Validar que el dui no exista
        $sql = "SELECT dui FROM cliente WHERE dui='$dui';";
        $resulta = mysqli_query($bs->myconn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<div class="registro_advertencia"><a data-text="MsgCodigYaReg1">El Dui</a>&nbsp;<b>' . $dui . '</b><a data-text="MsgEmailYaReg2">ya esta registrado, Verifique!.</a></div>';
        } else {

            // Validación de correo electrónico
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El correo electrónico no es válido.";
            }

            if (strlen($contraseña) < 8 || !preg_match("/[A-Z]/", $contraseña) || !preg_match("/[a-z]/", $contraseña) || !preg_match("/[0-9]/", $contraseña)) {
                $errors[] = "La contraseña debe tener al menos 8 caracteres, incluyendo una mayúscula, una minúscula y un número.";
            }

            if ($contraseña !== $verificar_contraseña) {
                $errors[] = "Las contraseñas no coinciden.";
            }

            // Como el correo no existe y el codigo del alumno tampoco, se procede a insertar el registro
            // Insertar los datos de registro del alumno

            $sql = "INSERT INTO cliente (PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, email, dui, direccion, telefono, contraseña) 
            VALUES ('$PrimerNombre','$SegundoNombre','$PrimerApellido','$SegundoApellido','$email', '$dui', '$direccion','$telefono','$contraseña')";
            $sql1 = mysqli_query($bs->myconn, $sql);

            header("location: inicioSesion.php");
            exit();

            if ($sql1) {
                echo '<div class="registro_exitoso" data-text="AlumnRegsOK1">Los datos se han registrado correctamente.</div>';
            } else {
                echo '<div class="registro_error" data-text="AlumnRegsFa1">Error al registrar los datos.</div>';
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../Imagenes/logo-mini.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cssdepura.css">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="BoddyDos">
    <div class="form-wrapper">
        <main class="form-side">
            <a href="../HTML/index.html" title="Logo">
                <img src="../Imagenes/Logo_grande_negro.png" alt="Laplace Logo" class="logo">
            </a>

            
            <form class="my-form" method="POST">

                <div class="form-welcome-row">
                    <h1 style="color: black; font-family:Bebas neue; font-size:2.5rem;">Bienvenid@ a Bidding Sure!</h1>
                    <h2>Encuentra lo que buscas en un solo lugar</h2>
                </div>

                <div class="bloquepadredeRegistro" style=" display: flex; margin-left: -20%;">

                    <div class="PrimerBloqueRegistro" style="margin-left: -25%; margin-right: 20px ;">
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue; width: 400px;" for="email">Primer Nombre</label>
                            <input type="text" id="NomUsuario" name="PrimerNombre" autocomplete="off"
                                required>
                            <div class="error-message">Nombre de Usuario No válido</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue; width: 400px;" for="email">Segundo Nombre</label>
                            <input type="text" id="NomUsuario" name="SegundoNombre" autocomplete="off"
                                required>
                            <div class="error-message">Nombre de Usuario No válido</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="email">Primer Apellido</label>
                            <input type="text" id="NomUsuario" name="PrimerApellido" autocomplete="off"
                                required>
                            <div class="error-message">Apellido de Usuario No válido</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="email">Segundo Apellido</label>
                            <input type="text" id="NomUsuario" name="SegundoApellido" autocomplete="off"
                                required>
                            <div class="error-message">Apellido de Usuario No válido</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="email" autocomplete="off"
                                required>
                            <div class="error-message">Correo Incorrecto</div>
                        </div>
                    </div>

                    <div class="segundoBloqueRegistro">

                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="email">Domicilio</label>
                            <input type="Texto" id="Ubi" name="direccion" autocomplete="off"
                                required>
                            <div class="error-message">ubicacion no encontrada.. Introduzca una direccion válida</div>
                        </div>
                        <div class="text-field">
                            <label  style="color: black; font-family:Bebas neue; width: 400px;" for="email">Número de télefono</label>
                            <input type="text" id="NumTelefonico" name="telefono" autocomplete="off"
                                required>
                            <div class="error-message">Número de digitos supera el número de carácteres </div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="email">DUI o Pasaporte</label>
                            <input type="text" id="NumDeIdentificacion" name="dui" autocomplete="off"
                                required>
                            <div class="error-message">Número de digitos no válidos</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="password">Contraseña</label>
                            <input id="password" type="password" name="contraseña"  title="Contraseña"
                             required>
                            <div class="error-message">Mínimo 6 caracteres, al menos 1 alfabeto y 1 número</div>
                        </div>
                        <div class="text-field">
                            <label style="color: black; font-family:Bebas neue;" for="password">Confirmar Contraseña</label>
                            <input id="verificar_contraseña" type="password" name="verificar_contraseña"  title="Contraseña"
                             required>
                            <div class="error-message">Mínimo 6 caracteres, al menos 1 alfabeto y 1 número</div>
                        </div>
                    </div>

                </div>

                


                <button name="validar" class="my-form__button" type="submit">
                    Registrarse
                </button>
                <div class="my-form__actions">
                    <div class="my-form__row_Cuenta">
                        <span>¿Ya posee una cuenta?</span>
                        <a  style="color: black;" href="../php/InicioSesion.php" title="Reset Password">
                            Iniciar Sesion
                        </a>
                    </div>
                </div>

            </form>
        </main>
        <aside class="info-side"></aside>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>