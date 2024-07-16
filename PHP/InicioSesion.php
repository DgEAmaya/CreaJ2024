<?php

// incluir la clase db_connect
require_once __DIR__ . '/conexionn.php';

@$email = $_POST['email'];
@$contraseña = $_POST['contraseña']; 

@$sesion= $_SESSION['usuario'];
// conectar a la base de datos

$bs = new DB_CONNECT();
$conn = $bs->connect(); 
//
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($email) or empty($contraseña)) {
        echo '<div class="sesion_error" data-text="ComplTodCamp">Por favor completa todos los campos.</div>';
    } else {

        if (isset($_POST['email'])) {

            $sql = "SELECT * FROM cliente WHERE email='$email' AND contraseña='$contraseña';";
            $result = mysqli_query($bs->myconn, $sql);
            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);
                                                                                       
                $_SESSION['cliente']['usuario'] = $row[1];
                $_SESSION['cliente']['idCliente'] = $row['idCliente'];
                $_SESSION['cliente']['nombre'] = $row['nombre'];
                $_SESSION['cliente']['apellido'] = $row['apellido'];
                $_SESSION['cliente']['email'] = $row['email'];
                $_SESSION['cliente']['dui'] = $row['dui'];
                $_SESSION['cliente']['direccion'] = $row['direccion'];
                $_SESSION['cliente']['tarjetaCredito'] = $row['tarjetaCredito'];
                $_SESSION['cliente']['telefono'] = $row['telefono'];
                $_SESSION['cliente']['contraseña'] = $row['contraseña'];

                $_SESSION['cliente']['es_administrador'] = $row['es_administrador'];
                $_SESSION['cliente']['es_Inspector'] = $row['es_Inspector'];

                if ($_SESSION['cliente']['es_Inspector']) {
                    header("Location: inspector.php");
                    exit();
                }
                

                if ($_SESSION['cliente']['es_administrador']) {
                    header("Location: admin.php");
                    exit();
                }

                header("Location: index.php");
                exit();
            } else {

                echo '
                <div class="AlerSesionRegistro alert alert-danger " data-text="UserPassIncorr">Usuario y password incorrectos, no se puede iniciar sesion.</div>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../Imagenes/logo-mini.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cssdepura.css">
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
                    <h1 style="color: black; font-family:Bebas neue; font-size:2.5rem;" >Bienvenid@ a Bidding Sure!</h1>
                    <h2>Encuentra lo que buscas en un solo lugar</h2>
                </div>
                <div class="text-field">
                    <label for="email"style="color: black; font-family:Bebas neue;font-size:1.5rem; ">Correo Electronico</label>
                    <input type="email" id="email" name="email" placeholder="Tucorreo@gmail.com"
                        required>
                    <div class="error-message">Email in incorrect format</div>
                </div>
                <div class="text-field">
                    <label for="password" style="color: black; font-family:Bebas neue; font-size:1.5rem;">Contraseña</label>
                    <input id="password" type="password" name="contraseña" placeholder="Introduce tu contraseña" title="Mínimo 6 caracteres, al menos 1 alfabeto y 1 número"
                    required>
                    <div class="error-message">Mínimo 6 caracteres, al menos 1 alfabeto y 1 número</div>
                </div>

                    <button name="validar" class="my-form__button" type="submit" style="background-color: #57070c;">
                   
                        <h1 style=" font-family:Bebas neue; font-size:1.5rem;letter-spacing: 0.1rem;">Iniciar Sesión</h1>
                   
                    </button>

                <div class="my-form__actions">
                    <div class="my-form__row_Cuenta">
                        <span >¿No tiene cuenta?</span>
                        <a href="../php/Registros.php" title="Reset Password" class="link" style="color: black;">
                            Regístrese ahora
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