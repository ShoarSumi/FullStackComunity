    
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

                            <li class="nav-item">
                                <a class="nav-link enlaces lead" href=""><?php echo $_SESSION["usuario"];?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-item nav-link enlaces lead dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                        if($_SESSION['foto']!=""){
                                            echo '<img src="'.$_SESSION['foto'].'" class="img-fluid logo-user h-100" alt="usuario">';
                                        }else{
                                            echo '<img src="view/imgUsuarios/default/avatar.png" class="img-fluid logo-user h-100" alt="usuario">';
                                        }
                                    ?>
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
                                <a class="nav-link enlaces lead" href="" data-toggle="modal" data-target="#RegistroModal">registrate</a>
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






<!-- Modal Registro-->
<div class="modal fade" id="RegistroModal" tabindex="-1" role="dialog" aria-labelledby="RegistroModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="RegistroModalLabel"><i class="far fa-id-card"></i> REGISTRO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group">  
                    <!-- nombre usuario -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary"><i class="far fa-user-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" name="nuevoNombre" required>
                    </div>
                    
                    <!-- usuario -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" name="nuevoUsuario" required>
                    </div>

                    <!-- contrasena -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" name="nuevoPassword" required>
                    </div>

                    <!-- telefono -->
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="Telefono" name="nuevoTelefono">
                    </div>
                    <small class="text-danger d-inline-block">no es obligatorio</small>

                    <!-- subir FOTO -->
                    <div class="mt-4">
                  
                        
                        <label for="nuevaFoto" class="btn btn-danger col-12 col-md-3">Subir foto</label>
                        <input type="file" id="nuevaFoto" class="nuevaFoto d-none" name="nuevaFoto">

                        <p class="help-block">Peso maximo de la foto 2 MB</p>

                        <!-- previsualizar es usado en el archivo subirFoto.js para mostrar la foto que seleccionemos -->

                        <img src="view/imgUsuarios/default/avatar.png" class="img-thumbnail previsualizar" width="150px">
                  
                    </div>

                    

                </div>

            </div>

            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>

            <?php
                
                $regirtro = new ControllerUsuario();
                $regirtro -> ctrCrearUsuario();

            ?>
        </form>
    </div>
  </div>
</div>


        