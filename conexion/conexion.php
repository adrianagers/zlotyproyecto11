<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "dbzloty";

    class Conectar{

        public static function conexion(){  
            try{
                $conexion = new mysqli("localhost", "root", "", "dbzloty");
                //$conexion = new mysqli(SERVIDOR,USUARIO,CLAVE,DBNOMBRE);
    
            } catch(Exception $e){
                die("error" . $e->getMessage());
                echo "Error en la línea: " . $e->getLine();            
            }
            return $conexion;
        }
    }
    try{
        //$conexion = new mysmyqli("localhost", "root", "", "dbzloty");
        $conexion = new mysqli($servidor,$usuario,$clave,$bd);

    } catch(Exception $e){
        die("error" . $e->getMessage());
        echo "Error en la línea: " . $e->getLine();
    }

?>