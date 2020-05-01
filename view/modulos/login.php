<!-- inicio modal -->
<div class="login-fondo">
                    <div class="container px-0 h-100">
                        <div class="row h-100">
                            <div class="col-12 h-100">
                                <div class="d-flex justify-content-center h-100">
                                <div class="card-login col-12 col-sm-8 col-md-6 col-lg-4">
                                    <div class="card-header">
                                        <h3>Iniciar sesión</h3>
                                    </div>
                                    <div class="card-body">

                                        <form method="post">
                                            <?php
                                                $user = new ControllerUsuario();
                                                $user -> ctrUsuario();
                                            ?>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="usuario" name="username" required>
                                                
                                            </div>
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="contraseña" name="password" required>
                                            </div>
                                            <div class="row align-items-center remember">
                                                <input type="checkbox">Remember Me
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="ingresar" class="btn float-right login_btn">
                                            </div>

                                        </form>
                                    </div>

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-center links">
                                        ¿No tienes una cuenta?
                                            <a href="#">Regístrate</a>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="#">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

</div>
    <!-- fin modal -->