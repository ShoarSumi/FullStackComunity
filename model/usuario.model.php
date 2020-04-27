<?php
require 'conexion.php';

class ModelUsuario{

    static public function mdlModeloUSuario($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt->fetch();

    }

}