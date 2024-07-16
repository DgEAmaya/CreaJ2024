<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand ps-3" href="../PHP/index.php"><img src="../Imagenes/logo-mini.png" width="60"></a></a>
    <button class="btn   order-1 order-lg-0 me-4 me-lg-4" id="sidebarToggle" href="#!"><i class="fas fa-bars bg-white "></i></button>
    
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menú</div>
                    <a class="nav-link collapsed" href="../PHP/index.php" data-bs-toggle="collapse" data-bs-target="#collapseHome" aria-expanded="false" aria-controls="collapseHome">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        Inicio
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSubastas" aria-expanded="false" aria-controls="collapseSubastas">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        Subastas
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapseSubastas" aria-labelledby="headingSubastas" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../PHP/Entretenimiento.php">Entretenimiento</a>
                            <a class="nav-link" href="../PHP/Moda.php">Moda Urbana</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonaciones" aria-expanded="false" aria-controls="collapseDonaciones">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        Donaciones
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapseDonaciones" aria-labelledby="headingDonaciones" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../PHP/RealizarDona.php">Realizar</a>
                            <a class="nav-link" href="../PHP/SolicitudesDona.php">Solicitar</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="../PHP/Reclamaciones.php">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        Reclamaciones
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContactanos" aria-expanded="false" aria-controls="collapseContactanos">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        Contáctanos
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="collapseContactanos" aria-labelledby="headingContactanos" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../HTML/Contactanos.html">Contactanos por Gmail</a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseRedes" aria-expanded="false" aria-controls="pagesCollapseRedes">
                                Redes Sociales
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
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

                    <a class="nav-link" href="../HTML/Políticas.html">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        Políticas de Privacidad
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>



 <!-- aqui termina el menu -->