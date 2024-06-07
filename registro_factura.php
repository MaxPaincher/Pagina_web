<?php

include("conexion.php");

/*if (!empty($_POST["register_factura"]))
    (!empty($_POST["nombre_cliente"]) and 
    !empty($_POST["apellido_cliente"]) and 
    !empty($_POST["numero_factura"]) and 
    !empty($_POST["fecha"]) and 
    !empty($_POST["monto"]) and 
    !empty($_POST["producto"]) and 
    !empty($_POST["ID_producto"]));{
        
*/

        $nombre=$_POST["nombre_cliente"];
        $apellido=$_POST["apellido_cliente"];
        $numero_factura=$_POST["numero_factura"];
        $fecha=$_POST["fecha"];
        $monto=$_POST["monto"];
        $producto=$_POST["producto"];
        $ID_producto=$_POST["ID_producto"];
        
        $sql=$conexion->query("INSERT INTO facturaa (nombre_cliente, apellido_cliente, numero_factura, fecha, monto, ID_producto, producto) 
        VALUES('$nombre','$apellido','$numero_factura','$fecha','$monto','$producto','$ID_producto')");


  //  }
  

?>