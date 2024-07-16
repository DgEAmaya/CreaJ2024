<?php 
require_once '../PHP/conexionn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomReceptor = trim($_POST['nomReceptor']);
    $emailReceptor = trim($_POST['emailReceptor']);
    $direccionReceptora = trim($_POST['direccionReceptora']);
    $telReceptor = trim($_POST['telReceptor']);
    $producSolicitar = trim($_POST['producSolicitar']);
    $cantSolicitar = trim($_POST['cantSolicitar']);

    // Verifica si la conexión se estableció correctamente
    if ($conex === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Prepara la consulta SQL
    $sql = "INSERT INTO solicitardonacion (nomReceptor, emailReceptor, direccionReceptora, telReceptor, producSolicitar, cantSolicitar) VALUES ('$nomReceptor', ' $emailReceptor', '$direccionReceptora', '$telReceptor', '$producSolicitar', '$cantSolicitar')";
    $resultado = mysqli_query($conex,$sql);
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donaciones</title>
  <link rel="shortcut icon" href="../Imagenes/logo-mini.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/cssdepura.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">
<?php 
 include('menu.php');
 ?>
 <!-- aquí termina el menú -->
 <!-- imagen de donaciones -->
 <img src="../Imagenes/5.png" width="100%"  class="img-fluid max-width: 100%;" alt="imgDonaciones">  
 <!-- aquí termina la imagen -->
  <section class="intro">
    <div class="bg-image h-100">
      <div class="mask d-flex align-items-center h-100" style="background-color: #f3f2f2;">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-lg-9 col-xl-8">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-4 d-none d-md-block">
                    <img
                      src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg"
                      alt="login form"
                      class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem; height: 100%;"
                    />
                  </div>
                  <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body py-5 px-4 p-md-5">
                      <form action="" method="POST">
                        <h4 class="fw-bold mb-4" style="color: #57070C;">Solicitar Donaciones</h4>
                        <p class="mb-4" style="color: #45526e;">Datos del RECEPTOR de la donación (Todos los datos son obligatorios).</p>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="nomRecepto">Nombre Completo</label>
                          <input type="text" id="nomRecepto" name="nomReceptor" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="emailReceptor">Correo Electrónico</label>
                          <input type="email" id="emailReceptor" name="emailReceptor" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="direccionReceptora">Ubicación</label>
                          <input type="text" id="direccionReceptora" name="direccionReceptora" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="telReceptor">Número Telefónico</label>
                          <input type="text" id="telReceptor" name="telReceptor" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="producSolicitar">Producto a solicitar</label>
                          <input type="text" id="producSolicitar" name="producSolicitar" class="form-control" required />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="cantSolicitar">Cantidad a Solicitar</label>
                          <input type="text" id="cantSolicitar" name="cantSolicitar" class="form-control" required />
                        </div>
                        <input type="submit" class="btn btn-primary btn-rounded" style="background-color: #57070C;" name="btn_solicitud" value="Enviar solicitud">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>
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
</html>