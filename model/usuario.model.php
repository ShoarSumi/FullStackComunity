<?php
require 'conexion.php';

class ModelUsuario{

    static public function mdlModeloUSuario($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt=null;

    }

    static public function mdlIngresarUsuario($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,usuario,password,telefono,foto) VALUES(:nombre, :usuario, :password, :telefono, :foto)");
        $stmt -> bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $stmt -> bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
        $stmt -> bindParam(":password",$datos['password'],PDO::PARAM_STR);
        $stmt -> bindParam(":telefono",$datos['telefono'],PDO::PARAM_STR);
        $stmt -> bindParam(":foto",$datos['foto'],PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();

        $stmt=null;
    }

    static public function mdlExisteUsuario($tabla, $usuario){
        $stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE usuario=:valor");
        $stmt -> bindParam(":valor",$usuario , PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt=null;
    }

}