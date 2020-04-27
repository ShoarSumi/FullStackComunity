<!-- inicio modal -->
<div class="login-fondo">
                    <div class="container px-0 h-100">
                        <div class="row h-100">
                            <div class="col-12 h-100">
                                <div class="d-flex justify-content-center h-100">
                                <div class="card-login">
                                    <div class="card-header">
                                        <h3>Iniciar sesion</h3>
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
                                            Don't have an account?<a href="#">Sign Up</a>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

</div>
    <!-- fin modal -->