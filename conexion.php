<?php

    $conexion = mysqli_connect("localhost", "root", "", "test1");
    $conexion->set_charset("utf8");
    
    if($conexion)
    {
        echo "Conexion exitosa";
    }else{
        echo "Conexion fallida";
    }

?>