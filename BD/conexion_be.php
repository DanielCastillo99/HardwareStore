<?php
    function conectarBD() : mysqli{
        $db = mysqli_connect('localhost','root','Dani123.','ferreteria');
    
        if (!$db){
            echo "Error no se pudo conectar";
            exit;
        }
    
    return $db;
    // if($conexion){
    //     echo"Conectado exitosamente a la base de datos";
    // }else{
    //     echo "No se ha podido conectar a la base de datos";
    // }
    }