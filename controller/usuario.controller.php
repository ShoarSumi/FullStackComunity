<?php

class ControllerUsuario{

    function ctrUsuario(){
        
        if(isset($_POST["username"])){
            if(preg_match('/^[-a-zA-Z0-9_]+$/', $_POST["username"]) && preg_match('/^[-a-zA-Z0-9_]+$/', $_POST["password"])){
                $tabla="usuario";
                
                $item="usuario";
                
                $valor=$_POST["username"];
                
                $respuesta=ModelUsuario::mdlModeloUSuario($tabla,$item,$valor);

                /* var_dump($respuesta); */

                if($_POST["username"]== $respuesta["usuario"] && $_POST["password"]==$respuesta["password"]){

                    $_SESSION["iniciarSesion"]="ok";
                        echo '<script>
                            window.location = "inicio";
                        </script>';

                }else{
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>ingresaste mal tu usuario o contrasena.
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>';
                }
            }
        }
    }

}