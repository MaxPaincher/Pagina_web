<?php

include ("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["contrasena"];

$query = mysqli_query($conexion, "SELECT * FROM empleados WHERE nombre = '$nombre' AND contrasena = '$pass'");

?>