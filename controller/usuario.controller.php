<?php

class ControllerUsuario{

    static public function ctrUsuario(){
        
        if(isset($_POST["username"])){
            if(preg_match('/^[-a-zA-Z0-9_]+$/', $_POST["username"]) && preg_match('/^[-a-zA-Z0-9_]+$/', $_POST["password"])){
                $tabla="usuario";
                
                $item="usuario";
                
                $valor=$_POST["username"];
                
                $respuesta=ModelUsuario::mdlModeloUSuario($tabla,$item,$valor);

                /* var_dump($respuesta); */

                $encriptar = crypt($_POST['password'],'$2a$07$usesomesillystringforsalt$');

                if($_POST["username"]== $respuesta["usuario"] && $respuesta["password"]==$encriptar){

                    $_SESSION["iniciarSesion"]="ok";
                    $_SESSION["nombre"]=$respuesta['nombre'];
                    $_SESSION["usuario"]=$respuesta['usuario'];
                    $_SESSION["foto"]=$respuesta['foto'];
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

    static public function ctrCrearUsuario(){

        if(isset($_POST['nuevoUsuario'])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóú -]+$/',$_POST['nuevoNombre'])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóú]+$/',$_POST['nuevoUsuario'])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóú ]+$/',$_POST['nuevoPassword'])){

                $ruta="";
                

                if(isset($_FILES['nuevaFoto']['tmp_name'])){
                    list($ancho,$alto) = getimagesize($_FILES['nuevaFoto']["tmp_name"]);
                    $nuevoAncho=500;
                    $nuevoAlto=500;

                    /* creando el directorio */

                    $directorio = "view/imgUsuarios/".$_POST['nuevoUsuario'];

                    mkdir($directorio,0755);

                    if($_FILES['nuevaFoto']["type"]=="image/png"){

                        $aleatorio=mt_rand(100,999);

                        $ruta = "view/imgUsuarios/".$_POST['nuevoUsuario']."/".$aleatorio.".png";

                        /* RECORTE DE LA IMAGEN */

                        $origen=imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino= imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);

                        imagepng($destino,$ruta);

                    }

                    if($_FILES['nuevaFoto']["type"]=="image/jpeg"){

                        $aleatorio=mt_rand(100,999);

                        $ruta = "view/imgUsuarios/".$_POST['nuevoUsuario']."/".$aleatorio.".jpeg";

                        /* RECORTE DE LA IMAGEN */

                        $origen=imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);

                        $destino= imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                        imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);

                        imagejpeg($destino,$ruta);

                    }


                }
                
                $tabla = "usuario";

                $encriptar = crypt($_POST['nuevoPassword'],'$2a$07$usesomesillystringforsalt$');

                $datos=array("nombre"=>$_POST['nuevoNombre'],
                                "usuario"=>$_POST['nuevoUsuario'],
                                "password"=>$encriptar,
                                "telefono"=>$_POST['nuevoTelefono'],
                                "foto"=>$ruta);

                 /* verificar si existe usuario */

                $existe = ModelUsuario::mdlExisteUsuario($tabla,$_POST['nuevoUsuario']);

                /* cargando usuarios */

                if($_POST['nuevoUsuario']==$existe['usuario']){
                    echo '<script>
                    swal({
                        type:"error",
                        title:"es usuario '.$_POST['nuevoUsuario'].' ya existe",
                        showConfirmButton:true,
                        confirmButtonText:"cerrar"

                    }).then(function(result){
                        if(result.value){
                            window.location="inicio";
                        }
                    })
                    </script>';
                }else{
                    $respuesta = ModelUsuario::mdlIngresarUsuario($tabla,$datos);
                }

                if($respuesta == "ok"){
                    echo '<script>
                    swal({
                        type:"success",
                        title:"Su registro fue exitoso",
                        showConfirmButton:true,
                        confirmButtonText:"cerrar"

                    }).then(function(result){
                        if(result.value){
                            window.location="login";
                        }
                    })
                    </script>';
                } 


            }else{
                echo '<script>
                    swal({
                        type:"error",
                        title:"El campo no puede llevar caracteres especiales",
                        showConfirmButton:true,
                        confirmButtonText:"cerrar"

                    }).then(function(result){
                        if(result.value){
                            window.location="inicio";
                        }
                    })
                </script>';
            }
        }

    }

}