<?php

include("conexion.php");

if (!empty($_POST["register"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_usuario["usuario"]) and !empty($_contrasena["contrasena"]));
        echo "todo ok";

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cedula=$_POST["cedula"];
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];

        $sql=$conexion->query("INSERT INTO 1(nombre,apellido,cedula,usuario,contrasena) VALUES('$nombre','$apellido','$cedula','$usuario','$contrasena')");
        
}else{
    echo "algunos campos tan vacio";
}
?>