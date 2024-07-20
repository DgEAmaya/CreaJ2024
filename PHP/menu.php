<?php
    session_start();
    require_once __DIR__ . '/conexionn.php';
    
    $bs = new DB_CONNECT();
    $conn = $bs->connect();

    if (!($_SESSION == null)){
      @$PrimerNombre = $_SESSION['cliente']['PrimerNombre'];
      @$PrimerApellido = $_SESSION['cliente']['PrimerApellido'];
      @$email = $_SESSION['cliente']['email'];

      $_SESSION['PrimerNombre'] = $PrimerNombre;
 

      echo '
    <nav class="sb-topnav navbar navbar-expand">

        <div class="izquierda">
            <a class="navbar-brand ps-3" href="../PHP/index.php"><img src="../Imagenes/logo-mini.png" width="60"></a>
        </div>

        <div class="deerecha d-flex">


            <h3 style=" color: #FFFFFF ;">puta <?php echo htmlspecialchars $PrimerNombre; ?> </h3>
            <i class="bi bi-bell-fill style="color:#FFFFFF; height:30px;" "></i>
            <button class="btn order-1 order-lg-0 me-4 me-lg-4" id="sidebarToggle" href="#!"><i class="fas fa-bars bg-white"></i></button>
        </div>

    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menú</div>
                        <a class="nav-link collapsed" href="../PHP/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSubastas">
                            <div class="sb-nav-link-icon"><i class="fas fa-gavel"></i></div>
                            Subastas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSubastas" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../PHP/Entretenimiento.php">Entretenimiento</a>
                                <a class="nav-link" href="../PHP/Moda.php">Moda Urbana</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonaciones">
                            <div class="sb-nav-link-icon"><i class="fas fa-donate"></i></div>
                            Donaciones
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDonaciones" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../PHP/RealizarDona.php">Realizar</a>
                                <a class="nav-link" href="../PHP/SolicitudesDona.php">Solicitar</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="../PHP/Reclamaciones.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Reclamaciones
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContactanos">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Contáctanos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseContactanos" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../HTML/Contactanos.html">Contactanos por Gmail</a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseRedes">
                                    Redes Sociales
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseRedes" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="Facebook.html">Facebook</a>
                                        <a class="nav-link" href="WhatsApp.html">WhatsApp</a>
                                        <a class="nav-link" href="Instagram.html">Instagram</a>
                                        <a class="nav-link" href="X.html">X</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link" href="../HTML/Políticas.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-shield-alt"></i></div>
                            Políticas de Privacidad
                        </a>
                    </div>
                </div>
                <a class="btn-session rounded" href="../PHP/cerrar_sesion.php">
                    <i class="fas fa-user-plus"></i>
                    <span class="ms-2">Cerrar Sesion</span>
                </a>
            </nav>
        </div>
    </div>
    ';
} else {
    echo '
    <nav class="sb-topnav navbar navbar-expand">
        
        
        <div class="izquierda">
            <a class="navbar-brand ps-3" href="../PHP/index.php"><img src="../Imagenes/logo-mini.png" width="60"></a>
        </div>

        <div class="deerecha d-flex">

            <a class="btn-session mx-3 rounded" href="../PHP/InicioSesion.php">
                <i class="fas fa-sign-in-alt"></i>
                <span class="ms-2">Iniciar Sesión</span>
            </a>

            <a class="btn-session mx-3 rounded" href="../PHP/Registros.php">
                <i class="fas fa-user-plus"></i>
                <span class="ms-2">Registrarse</span>
            </a>

            <button class="btn order-1 order-lg-0 me-4 me-lg-4" id="sidebarToggle" href="#!"><i class="fas fa-bars bg-white"></i></button>
        </div>


        
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menú</div>
                        <a class="nav-link collapsed" href="../PHP/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSubastas">
                            <div class="sb-nav-link-icon"><i class="fas fa-gavel"></i></div>
                            Subastas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSubastas" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../PHP/Entretenimiento.php">Entretenimiento</a>
                                <a class="nav-link" href="../PHP/Moda.php">Moda Urbana</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonaciones">
                            <div class="sb-nav-link-icon"><i class="fas fa-donate"></i></div>
                            Donaciones
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDonaciones" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../PHP/RealizarDona.php">Realizar</a>
                                <a class="nav-link" href="../PHP/SolicitudesDona.php">Solicitar</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="../PHP/Reclamaciones.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Reclamaciones
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContactanos">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Contáctanos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseContactanos" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../HTML/Contactanos.html">Contactanos por Gmail</a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseRedes">
                                    Redes Sociales
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseRedes" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="Facebook.html">Facebook</a>
                                        <a class="nav-link" href="WhatsApp.html">WhatsApp</a>
                                        <a class="nav-link" href="Instagram.html">Instagram</a>
                                        <a class="nav-link" href="X.html">X</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link" href="../HTML/Políticas.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-shield-alt"></i></div>
                            Políticas de Privacidad
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    ';
}
?>






 <!-- aqui termina el menu -->