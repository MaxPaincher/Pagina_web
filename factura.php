<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/facturaaa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01292aa371.js" crossorigin="anonymous"></script>
    
    <title>Factura</title>
</head>
<body>

<?php
include "conexion.php";
include "eliminar.php";
?>

    <section class= "fondo">
        <div class="capa_fondo"></div>
        </section>

    <div class= "barra">
        <header>
        <a href="inicio.html" style="text-decoration:none;">
            <h1>Minimarket La Virgen del Valle</h1>
        </a>
        <a href="factura2.html">
          <button>Anadir</button>
        </a>
        <img src="css/pics/R.png" alt="" class="carrito">
        </header>
    </div>
    <nav>
        <ul>
            <li><a href="proveedores.html">Proveedores</a></li>
            <li><a href="trabajadores.html">Empleados</a></li>
            <li><a href="productos.html">Productos</a></li>
            <li><a href="factura.php">Facturas</a></li>
          </ul>
    </nav>

    <table class="tabla">

<thead class="bg-info">
  <tr>
    <th class="text center p-3">Numero de factura</th>
    <th class="text center p-3">Nombre</th>
    <th class="text center p-3">Apellido</th>
    <th class="text center p-3">Nombre del producto</th>
    <th class="text center p-3">Fecha de la compra</th>
    <th class="text center p-3">Monto del producto</th>
    <th class="text center p-3">Id del producto</th>
    <th></th>
    <th></th>
  </tr>
</thead>
  
  <tbody>
  <?php
include 'conexion.php';
$consulta = "SELECT * FROM facturaa";
$resultado = $conexion->query($consulta);
if (!$resultado)
die("Error: " . $conexion->error);

if ($resultado->num_rows > 0) 


while($row = $resultado->fetch_assoc()) {?>
        <tr>
        <th scope="row" class="text center p-3"><?= $row["nombre_cliente"] ?></th>
        <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
        <td  class="text center p-3"><?= $row["apellido_cliente"] ?></td>
        <td  class="text center p-3"><?= $row["numero_factura"] ?></td>
        <td  class="text center p-3"><?= $row["fecha"] ?></td>
        <td  class="text center p-3"><?= $row["monto"] ?></td>
        <td  class="text center p-3"><?= $row["ID_producto"] ?></td>
        <td  class="text center p-3"><?= $row["producto"] ?></td>
        <td  class="text center p-3"><a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
        <td  class="text center p-3"><a href="" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
      </tr>
      <tr>

    <?php }
    else{
      echo "0 resultados";
    }
    $conexion->close();
    
    
    ?>
    </div>

    <a href="factura2.html">
    
    <button class="modificar">Modificar</button>
    <button class="eliminar">Eliminar</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
