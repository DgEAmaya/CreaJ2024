<?php
include('conexionn.php');

$id = $_GET['idCliente'];

$sql = "SELECT * FROM cliente WHERE idCliente='$id'";
$resultado = mysqli_query($conex,$sql);
$row = $resultado->fetch_array();

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
</head>
<body class="BoddyDos">
    <div class="form-wrapper">
        <main class="form-side">
            <a href="../PHP/index.php" title="Logo">
                <img src="../CreaJ2024/Imagenes/Logo_grande_negro.png" alt="Laplace Logo" class="logo">
            </a>
            <form class="my-form" method="POST">
                <div class="form-welcome-row">
                    <h1 style="color: black;">Bienvenid@ a Bidding Sure!</h1>
                    <h2>Encuentra lo que buscas en un solo lugar</h2>
                </div>
                <div class="text-field">
                    <label for="NomUsuario" style="color: black;">Nombre</label>
                    <input type="text" name="nombre" autocomplete="off" value="<?php echo $nombre?>" required>
                    <div class="error-message" style="color: black;">Nombre de Usuario No valido</div>
                </div>

                <div class="text-field">
                    <label for="NomUsuario" style="color: black;">Apellido</label>
                    <input type="text" name="apellido" autocomplete="off" required>
                    <div class="error-message" style="color: black;">Nombre de Usuario No valido</div>
                </div>
                
                <div class="text-field">
                    <label for="email" style="color: black;">Correo Electronico</label>
                    <input type="email"  name="email" autocomplete="on" required>
                    <div class="error-message" style="color: black;">Email en formato incorrecto</div>
                </div>

                <div class="text-field">
                    <label for="NumDeIdentificacion" style="color: black;">DUI o Pasaporte</label>
                    <input type="text"  name="dui" autocomplete="off" required>
                    <div class="error-message" style="color: black;">Número de dígitos no válidos</div>
                </div>

                <div class="text-field">
                    <label for="Ubi" style="color: black;">Domicilio</label>
                    <input type="text"  name="direccion" autocomplete="off" required>
                    <div class="error-message" style="color: black;">Ubicación no encontrada. Introduzca una dirección válida</div>
                </div>

                <div class="text-field">
                    <label for="TarjetaCred" style="color: black;">Número de Tarjeta</label>
                    <input type="text"  name="tarjeta" autocomplete="off" required>
                    <div class="error-message" style="color: black;">Número de dígitos no válidos</div>
                </div>

                <div class="text-field">
                    <label for="NumTelefonico" style="color: black;">Número Telefónico</label>
                    <input type="text"  name="telefono" autocomplete="off" required>
                    <div class="error-message" style="color: black;">Número de dígitos supera el número de caracteres</div>
                </div>

                <div class="text-field">
                    <label for="contraseña" style="color: black;">Contraseña</label>
                    <input type="password" id="contraseña" name="contraseña" title="Contraseña" required>
                    <div class="error-message" style="color: black;">Mínimo 6 caracteres, al menos 1 letra y 1 número</div>
                </div>
                <input class="my-form__button" type="submit" name="Btn-Ingresar" value="REGISTRARSE">
                <div class="my-form__actions">
                    <div class="my-form__row_Cuenta">
                        <span>¿Ya tienes una cuenta?</span>
                        <a href="../PHP/InicioSesion.php" title="Iniciar Sesión" style="color: black;">
                            Iniciar Sesión
                        </a>
                    </div>
                </div>
            </form>
        </main>
        <aside class="info-side"></aside>
    </div>
</body>
</html>