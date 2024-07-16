<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand ps-3" href="../HTML/administrador.html"><img src="../Imagenes/logo-mini.png" width="60"></a></a>
    <button class="btn   order-1 order-lg-0 me-4 me-lg-4" id="sidebarToggle" href="#!"><i class="fas fa-bars bg-white "></i></button>
    
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu</div>


                    <a class="nav-link" href="../PHP/admin.php ">
                      <div class="sb-nav-link-icon"><i class="bi bi-house-door-fill"></i></div>
                      Inicio
                    </a>

                    <a class="nav-link" href="../PHP/usuarios.php ">
                      <div class="sb-nav-link-icon"><i class="bi bi-envelope-at-fill"></i></div>
                      Usuarios
                    </a>

                    <a class="nav-link collapsed" href="../HTML/administrador.html" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                      
                      <div class="sb-nav-link-icon"><i class="bi bi-currency-dollar"></i></div>
                      Subastas
                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>


                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">coleccionismo</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Moda Urbana</a>
                      </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonaciones" aria-expanded="false" aria-controls="collapseDonaciones">
                      <div class="sb-nav-link-icon">
                        <i class="bi bi-envelope-paper-heart-fill"></i>
                      </div>
                      Donaciones
                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                
                  
                  <div class="collapse" id="collapseDonaciones" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav">
                          <a class="nav-link" href="../PHP/DonacionesSolicitadas.php">Solicitudes</a>
                          <a class="nav-link" href="../HTML/DonacionesRealizadasAdmin.html">Donaciones Realizadas</a>
                      </nav>
                  </div>
                  
                    

                    <a class="nav-link" href="../PHP/Reclamos_visual.php ">
                      <div class="sb-nav-link-icon">

                        <i class="bi bi-file-earmark-excel-fill"></i>

                      </div>
                      Reclamaciones
                    </a>
                    
                </div>
            </div>
            <a href="../HTML/InicioSesion.html">
              <div class="sb-sidenav-footer">
                <div class="small">Iniciar Sesion</div>
                Bidding Sure 
            </div>
            </a>
        </nav>
        
    </div>
  </div>

  <script src="../js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  

 <!-- aqui termina el menu -->
</body>
</html>