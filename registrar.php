<?php

include("conexion.php");

if (!empty($_POST["register"]))
    (!empty($_POST["nombre"]) and 
    !empty($_POST["apellido"]) and 
    !empty($_POST["cedula"]) and 
    !empty($_POST["usuario"]) and 
    !empty($_POST["contrasena"]));{
        echo "todo ok";
    echo $_POST["nombre"];

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cedula=$_POST["cedula"];
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];

        $sql=$conexion->query("INSERT INTO tablaa (nombre,apellido,cedula,usuario,contrasena) 
        VALUES('$nombre','$apellido','$cedula','$usuario','$contrasena')");

    }
?>