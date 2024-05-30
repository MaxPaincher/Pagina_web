<?php

    include ("conexion.php");

    if (isset($_POST['register'])) {
        
        if(
            strlen($nombre['nombre']) >= 1 &&
            strlen($apellido['apellido']) >= 1 &&
            strlen($cedula['cedula']) >= 1 &&
            strlen($nombre_usuario['usuario']) >= 1 &&
            strlen($contrasena['contrasena']) >= 1 

        )

        {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $cedula = trim($_POST['cedula']);
            $nombre_usuario = trim($_POST['usuario']);
            $contrasena = trim($_POST['contrasena']);
            $consulta = "INSERT INTO 1(nombre, apellido, cedula, usuario, contrasena)
                VALUES('$name', '$apellido', '$cedula', '$usuario', '$contrasena')";
            $resultado = mysqli_query($conexion, $consulta);
            if($resultado){
                ?>
                <h3 class="succes">Tu registro</h3>
            <?php
            } else{
                ?>
                <h3 class="error">Ups ha ocurrido un error</h3>
            <?php
            }
            

        } else {
            ?>
            <h3 class="error">Por favor complete los campos</h3>
        <?php
        }
     }

  
?>