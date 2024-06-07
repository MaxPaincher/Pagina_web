<?php

if (!empty($_get["numero_factura"])) {
    $numero_factura = $_get["numero_factura"];
    $sql=$conexion->query("DELETE FROM facturaa WHERE numero_factura=$numero_factura");
    if ($sql==1){
        echo '<div>Persona eliminado correctamente</div>';
    }else{
        echo '<div>Error al eliminar</div>';
    }
    
}

?>