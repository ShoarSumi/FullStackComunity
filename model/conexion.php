<?php
    class Conexion{
        static function conectar(){
            try{
                $link = new PDO("mysql::host=localhost;dbname=fullstack","root","");

                $link -> exec("set names utf8");
                
                return $link;

            }catch(PDOException $e){
                echo $e -> getMessage();
            }
        }
    }

?>