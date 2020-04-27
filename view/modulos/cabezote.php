    
        <!-- inicio navegador -->
<div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 m-0 p-0">
                    
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand mr-auto" href="inicio"><img src="view/img/logo1.png" class="img-fluid" alt="logo de la comunidad"></a>

                            <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link enlaces lead" href="inicio">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link enlaces lead" href="blog">Blog</a>
                            </li>

                            <?php
                                if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok"):
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-item nav-link enlaces lead dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="view/img/desarrollo.jpg" class="img-fluid logo-user h-100" alt="usuario">
                                </a>
                                <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                                    <a class="dropdown-item" href="cerrar">Cerrar</a>
                                </div>
                            </li>
                            <?php 
                                
                                else:

                            ?>
                            <li class="nav-item">
                                <a class="nav-link enlaces lead registro text-white" href="login">Iniciar sesion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link enlaces lead" href="#">registrate</a>
                            </li>
                            
                            <?php
                            
                                endif;        

                            ?>
                            
                            
                            </ul>

                            
                        </div>
                    </nav>


                </div>
            </div>
        </div>
</div>
    <!-- fin navegador -->


        