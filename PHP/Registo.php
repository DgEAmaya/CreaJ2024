<?php
// Registro.php

require_once '../PHP/conexionn.php';


if (isset($_POST['Btn-Ingresar'])) {
    // se evalue el hecho de hacer toque al boton
    
     $nombre = trim($_POST['nombre']);
     $apellido = trim($_POST['apellido']);
     $email = trim($_POST['email']);
     $dui = trim($_POST['dui']);
     $direccion = trim($_POST['direccion']);
     $tarjeta = trim($_POST['tarjeta']);
     $telefono = trim($_POST['telefono']);
     $contraseña=  trim($_POST['contraseña']);    
     $insertar = "INSERT INTO cliente(nombre, apellido,email, dui, direccion, tarjetaCredito, telefono, contraseña) VALUES('$nombre','$apellido','$email','$dui','$direccion','$tarjeta','$telefono','$contraseña')";
     $resultado = mysqli_query($conex,$insertar);
    if ($resultado){
      ?>   
    <script>alert("El usuario fue registrado exitosamente")</script>
      <?php 
    }else{
    
      ?>
        <script>alert("Error al registrar")</script>
    
      <?php
    }
     }





/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la conexión a la base de datos
    $conn = $db->getConnection();

    // Sanitizar y validar las entradas del formulario
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $ubi = filter_input(INPUT_POST, 'ubi', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $dui = filter_input(INPUT_POST, 'dui', FILTER_SANITIZE_STRING);
    $tarjeta = filter_input(INPUT_POST, 'tarjeta', FILTER_SANITIZE_STRING);
    $clave = filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_STRING);

    // Validar si el correo ya está registrado
    $sql = "SELECT email FROM cliente WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() > 0) {
        echo '<div>El correo <b>' . htmlspecialchars($email) . '</b> ya está registrado, ¡verifique!</div>';
    } else {
        // Validar si la contraseña ya está registrada (normalmente, esto no es necesario y está mal conceptualmente, ya que las contraseñas son únicas por usuario)
        // Vamos a omitir esta validación ya que es redundante

        // Encriptar la contraseña antes de almacenar
        $hashed_password = password_hash($clave, PASSWORD_DEFAULT);

        // Insertar los datos del usuario en la base de datos
        $sql = "INSERT INTO cliente (nombre, email, dui, direccion, tarjetaCredito, telefono, contraseña) 
                VALUES (:nombre, :email, :dui, :ubi, :tarjeta, :telefono, :clave)";
        $stmt = $conn->prepare($sql);
        $parametros = [
            'nombre' => $nombre,
            'email' => $email,
            'ubi' => $ubi,
            'telefono' => $telefono,
            'dui' => $dui,
            'tarjeta' => $tarjeta,
            'clave' => $hashed_password,
        ];

        if ($stmt->execute($parametros)) {
            echo '<div>Los datos se han registrado correctamente.</div>';
            header("Location: InicioSesion.php");
            exit();
        } else {
            echo '<div>Error al registrar los datos.</div>';
        }
    }
}*/
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
                    <input type="text" name="nombre" autocomplete="off" required>
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
