<?php 
include_once('librerias/cabecera.php');
include_once('librerias/conexion.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-lg-2" align="left">
      <div class="list-group">
        <a href="clientes.php" class="list-group-item">CLIENTES</a>
        <a href="productos.php" class="list-group-item">PRODUCTOS</a>
        <a href="venta.php" class="list-group-item">REGISTRAR VENTA</a>
        <a href="#" class="list-group-item active">REPORTES</a>
        <a href="pedidos.php" class="list-group-item">PEDIDOS</a>
      </div>
    </div> 
    <div class="col-md-10">
     <h1>Reporte de ventas</h1>
     <br>
     <form class="form-horizontal" method="post" action="reportes.php" role="form">
      <div class="form-group">
        <label class="col-lg-2 control-label">Desde</label>
        <div class="col-md-6">
         <input type="date" class="form-control" name="fecha">
       </div>
     </div>
     <div class="form-group">
      <label class="col-lg-2 control-label">Hasta</label>
      <div class="col-md-6">
       <input type="date" class="form-control" name="fecha2">
     </div>
   </div>
   <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </div>
</form>


</div>
<table class="table table-hover" border="0">
  <thead>
    <tr>
      <th>Carnet</th>
      <th>Cliente</th>
      <th>Telefono</th>
      <th>Producto</th>
      <th>Fecha</th>
      <th></th>
      <th></th>

    </tr>
  </thead>
  <tbody>
    <?php

    $sql="select c.carnet, c.Nombres, c.Telefono, p.NombreProducto, v.fecha from clientes c, productos p, venta v where v.idproducto = p.idProducto and v.IdCliente = c.IdCliente";
    $result2 = $conexion->query($sql);
    if ($result2->num_rows>0) {
      while ($row =$result2->fetch_array()) {
        echo "<tr><td>".$row['carnet']."</td>";
        echo "<td>".$row['Nombres']."</td>";
        echo "<td>".$row['Telefono']."</td>";
        echo "<td>".$row['NombreProducto']."</td>";
        echo "<td>".$row['fecha']."</td>";
        echo "</tr>";}
      }
      ?>
    </tbody>
  </table>
</div> </div>
<?php
include_once('librerias/pie.php');
?>