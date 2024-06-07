<?php

include ("conexion.php");


$login = $_POST["login"];
$nombre = $_POST["usuario"];
$contrasena = $_POST["contrasena"];


$query = mysqli_query($conexion, "SELECT * FROM tablaa WHERE usuario = '$nombre' AND contrasena = '$contrasena'");
$nr = mysqli_num_rows($query);

    
if ($nr == 1) 
{
    echo '<p>Bienvenido</p>';
    header("location:inicio.html");

}
elseif
    ($nr == 0)
{
    echo '<p class="error">Usuario o contraseña incorrectos.</p>';
}



?>