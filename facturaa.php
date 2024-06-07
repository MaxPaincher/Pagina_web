<div class="col -8 p-4">
    <table class="tabla">
        <thead class="bg-info">
          <tr>
            <th scope="col" class="text center p-3">Numero de factura</th>
            <th scope="col" class="text center p-3">Nombre</th>
            <th scope="col" class="text center p-3">Apellido</th>
            <th scope="col" class="text center p-3">Nombre del producto</th>
            <th scope="col" class="text center p-3">Fecha de la compra</th>
            <th scope="col" class="text center p-3">Monto del producto</th>
            <th scope="col" class="text center p-3">Id del producto</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
  
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
          <td  class="text center p-3"><?= $row["ID"] ?></td>
          <td  class="text center p-3"><a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <td  class="text center p-3"><a href="" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
          <th scope="row" class="text center p-3"><?= $row["nombre_cliente"] ?></th>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td  class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td><a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <td><a href="" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
        </tr>
        <tr>
          <th scope="row" class="text center p-3"><?= $row["nombre_cliente"] ?></th>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td class="text center p-3"><?= $row["nombre_cliente"] ?></td>
          <td><a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <td><a href="" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
        </tr>
      <?php }
      else{
        echo "0 resultados";
      }
      $conexion->close();
      
      
      ?>
  </tbody>
  </table>
