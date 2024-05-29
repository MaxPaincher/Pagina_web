<?php

    include ("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $nombre_usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO 'empleados' ('Nombre_empleado', 'Apellido_empleado', 'C.I.empleado', 'usuario', 'contrasena')  
     VALUES('$nombre', '$apellido', '$cedula', $nombre_usuario', '$contrasena')";
             

    $ejecutar = mysqli_query($conexion, $query);

?>