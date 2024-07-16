<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar</title>
    <link rel="shortcut icon" href="../Imagenes/logo-mini.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssdepura.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  </head>
  
  <body class="sb-nav-fixed"
  >
    
  <nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand ps-3" href="../PHP/index.php">
      <img src="../Imagenes/logo-mini.png" width="60">
    </a>
    <button class="btn order-1 order-lg-0 me-4 me-lg-4" id="sidebarToggle" href="#!">
      <i class="fas fa-bars bg-white "></i>
    </button>
  </nav>

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Menú</div>
            <a class="nav-link collapsed" href="../PHP/index.php" data-bs-toggle="collapse" data-bs-target="#collapseHome" aria-expanded="false" aria-controls="collapseHome">
              <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
              Inicio
            </a>

            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSubastas" aria-expanded="false" aria-controls="collapseSubastas">
              <div class="sb-nav-link-icon"><i class="fas fa-gavel"></i></div>
              Subastas
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSubastas" aria-labelledby="headingSubastas" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="../PHP/Entretenimiento.php">Entretenimiento</a>
                <a class="nav-link" href="../PHP/Moda.php">Moda Urbana</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonaciones" aria-expanded="false" aria-controls="collapseDonaciones">
              <div class="sb-nav-link-icon"><i class="fas fa-donate"></i></div>
              Donaciones
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDonaciones" aria-labelledby="headingDonaciones" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="../PHP/RealizarDona.php">Realizar</a>
                <a class="nav-link" href="../PHP/SolicitudesDona.php">Solicitar</a>
              </nav>
            </div>

            <a class="nav-link" href="../PHP/Reclamaciones.php">
              <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
              Reclamaciones
            </a>

            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContactanos" aria-expanded="false" aria-controls="collapseContactanos">
              <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
              Contáctanos
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseContactanos" aria-labelledby="headingContactanos" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="../PHP/Contactanos.php">Contáctanos por Gmail</a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseRedes" aria-expanded="false" aria-controls="pagesCollapseRedes">
                  Redes Sociales
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseRedes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="Facebook.html">Facebook</a>
                    <a class="nav-link" href="WhatsApp.html">WhatsApp</a>
                    <a class="nav-link" href="Instagram.html">Instagram</a>
                    <a class="nav-link" href="X.html">X</a>
                  </nav>
                </div>
              </nav>
            </div>

            <a class="nav-link" href="../PHP/Políticas.php">
              <div class="sb-nav-link-icon"><i class="fas fa-shield-alt"></i></div>
              Políticas de Privacidad
            </a>
          </div>
        </div>

        <div class="sb-sidenav-footer">
          <a class="btn-session" href="../PHP/InicioSesion.php">
            <i class="fas fa-sign-in-alt"></i>
            <span class="ms-2">Cerrar Sesión</span>
          </a>
          <a class="btn-session" href="../PHP/Registro.php">
            <i class="fas fa-user-plus"></i>
            <span class="ms-2">Registrarse</span>
          </a>
        </div>
      </nav>
    </div>
  </div>

    <img src="../Imagenes/RealizaDona.png" width="100%"  class="img-fluid max-width: 100%;" alt="imgDonaciones">  

    <div class="containerSoli">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Dirección de Envío</th>
                        <th>Teléfono</th>
                        <th>Categoría</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php

include('conexionn.php');

// Verificar la conexión a la base de datos
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}

// Manejar la inserción de datos si se envió el formulario
if (isset($_POST['Btn-donar'])) {
    // Obtener datos del formulario y escaparlos para evitar inyección SQL
    $nomDonador = mysqli_real_escape_string($conex, $_POST['nomDonador']);
    $emailDonador = mysqli_real_escape_string($conex, $_POST['emailDonador']);
    $direccionEnvio = mysqli_real_escape_string($conex, $_POST['direccionEnvio']);
    $telDonador = mysqli_real_escape_string($conex, $_POST['telDonador']);
    $CategoriaEmisor = mysqli_real_escape_string($conex, $_POST['CategoriaEmisor']);
    $producDonar = mysqli_real_escape_string($conex, $_POST['producDonar']);
    $cantDonar = mysqli_real_escape_string($conex, $_POST['cantDonar']);
    $estado = 'Pendiente'; // Estado inicial al realizar la donación

    // Preparar consulta SQL para insertar datos
    $sql = "INSERT INTO realizardonacion (nomDonador, emailDonador, direccionEnvio, telDonador, CategoriaEmisor, producDonar, cantDonar, estado)
            VALUES ('$nomDonador', '$emailDonador', '$direccionEnvio', '$telDonador', '$CategoriaEmisor', '$producDonar', '$cantDonar', '$estado')";

    // Ejecutar consulta y verificar el resultado
    $resultado = mysqli_query($conex, $sql);
    if ($resultado) {
        $mensaje = "La donación fue realizada con éxito.";
    } else {
        $error = "Error en el envío de su donación.: " . mysqli_error($conex);
    }
}

// Consulta SQL para obtener las solicitudes de donación pendientes
$sql = "SELECT * FROM solicitardonacion WHERE estado = 'Aprobado'";
$result = mysqli_query($conex, $sql);

// Verificar si se obtuvieron resultados
if ($result === false) {
    // Si hay un error en la consulta, imprimir el mensaje de error de MySQL
    echo "Error en la consulta: " . mysqli_error($conex);
} else {
    // Procesar los resultados de la consulta si no hubo errores
    if (mysqli_num_rows($result) > 0) {
        // Mostrar los datos en la tabla
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["idReceptor"] . "</td>";
            echo "<td>" . $row["nomReceptor"] . "</td>";
            echo "<td>" . $row["emailReceptor"] . "</td>";
            echo "<td>" . $row["direccionReceptora"] . "</td>";
            echo "<td>" . $row["telReceptor"] . "</td>";
            echo "<td>" . $row["CategoriaReceptor"] . "</td>";
            echo "<td>" . $row["producSolicitar"] . "</td>";
            echo "<td>" . $row["cantSolicitar"] . "</td>";
            echo "<td>" . $row["estado"] . "</td>";
            echo "<td>";
            echo '<a href="procesar-donacion.php?action=donar&idReceptor=' . $row["idReceptor"] . '" class="btn btn-success btn-sm">Donar</a>';
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>No hay solicitudes de donación.</td></tr>";
    }
}

// Cerrar conexión a la base de datos al finalizar
mysqli_close($conex);
?>
                </tbody>
            </table>
    </div>
  
<footer>
    <div class="footer-wrapper">
        <div class="footer-columns">
         <div class="footer-logo">
            <img src="../Imagenes/logo_Grande.png" alt="">
  
            <div class="RedesSociales">
              <div class="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
              </div>
              <div class="X">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg>
              </div>
              <div class="whatsapp">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg>
              </div>
              <div class="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
              </div>
            </div>
          </div>    
  
          <div class="FootDesarr">
            <div>
              <div class="nav-item-Footer">
                <p class="LetrasFooterDesarrolladores">Desarrolladores:</p>
              </div>
            </div>  
            <div class="footerDesa">
              <p class="LetrasDesa">Douglas Elias</p>
              <p class="LetrasDesa">William Aviles</p>
              <p class="LetrasDesa">Xavier Carias</p>
              <p class="LetrasDesa">Manuel Hernandez</p>
            </div>
          </div>
        </div>
  
        <div class="footer-bottom">
  
          <div class="titulocreditos1">
            <div class="footer-description">
              <p class="LetrasFooterCreaJ">Colegio Don Bosco</p>
              <p class="LetrasFooterCreaJ">Crea-J<p>
            </div>
          </div>
  
          <div class="titulocreditos2"> 
            <small class="LetrasFooterMini">Derechos Reservados © 2024</small>
          </div>   
  
        </div>
    </div>
  </footer>
  <script src="../js/scripts.js"></script>
  <script src="../js/subidaArchivos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>

</html>