<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $basededatos = "h1";

    $conexion = mysqli_connect("localhost", "root", "", "h1");
    
    if($conexion)
    {
        echo "Conexion exitosa";
    }else{
        echo "Conexion fallida";
    }

?>