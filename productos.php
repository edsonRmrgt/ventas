<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from productos";
$result = $conexion->query($sql);
?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-lg-2" align="left">
      <ul class="nav navbar-nav side-nav">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div class="list-group">
        <a href="clientes.php" class="list-group-item">CLIENTES</a>
        <a href="#" class="list-group-item active">PRODUCTOS</a>
        <a href="venta.php" class="list-group-item">REGISTRAR VENTA</a>
        <a href="reportes.php" class="list-group-item">REPORTES</a>
        <a href="pedidos.php" class="list-group-item">PEDIDOS</a>
      </div>
    </div>
    <div class="col-md-10 col-lg-10">
      <div class="row">
        <div class="col-md-9">
          <h1><center><label>Listado de Productos</label></center></h1>
        </div>
        <div class="col-md-3"><br>
          <button class="btn btn-primary btn-lg " value="Nuevo" data-toggle="modal" data-target="#myModal">NUEVO</button>

          <div id="myModal" class="modal fade" role="dialog">
           <div class="modal-dialog">
            <!-- contenido-->

            <div class="modal-content">
             <div class="panel-heading" id="pane">
               <p id="p2" class="panel-title text-center text-primary"><strong>Nuevo Producto</strong></p>
             </div>

             <div class="panel-body">
               <div class="col-md-offset-2 col-md-8">
                <form method="post" action="nuevoPro.php" id="form2">
                  <div class="form-group">
                    <label>PRODUCTO</label>
                    <input type="text" class="form-control" name="producto" required="required">
                  </div>
                  <div class="form-group">
                    <label>DESCRIPCION</label>
                    <input type="area" class="form-control" name="descripcion" required="required">
                  </div>
                  <div class="form-group">
                    <label>Precio de Compra</label>
                    <input type="number" class="form-control" name="compra" required="required">
                  </div>
                  <div class="form-group">
                    <label>Precio de Venta</label>
                    <input type="number" class="form-control" name="venta" required="required">
                  </div>
                  <div class="form-group">
                   <label class="control-label">Categoria</label>
                   <select name="categoria" class="form-control">
                    <option value="">-- ELIGE UNA CATEGORIA --</option>
                    <?php
                    $sq="select * from categorias";
                    $resul = $conexion->query($sq);
                    while ($row =$resul->fetch_array()) {
                      echo "<option value='".$row['IdCategoria']."'>".$row['NombreCategoria']."</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                 <label>Cantidad</label>
                 <input type="number" class="form-control" name="cantidad" required="required">
               </div>
               <div class="col-md-12">
                <div class="form-group">
                  <input type="submit" class=" btn btn-sm btn-primary" value="Enviar">
                  <input type="reset" class="btn btn-sm btn-default" value="limpiar">
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<form method="post" action="productos.php">
 <div class="form-group">
  <label for="username">Buscar</label>
  <div class="row">
   <div class="col-md-10">
     <input type="text" class="form-control" name="buscar">
   </div>
   <div class="col-md-2">
     <input type="submit" class="btn btn-default glyphicon glyphicon-search" value="Buscar">
   </div>
 </div>
</div>
</form>
<hr>
<div class="row">
 <div class="col-md-12">
  <div class="table-responsive">
   <table class="table table-hover" border="0">
    <thead>
      <tr>
       <th><label>Producto</label></th>
       <th><label>Descripcion</label></th>
       <th><label>Compra</label></th>
       <th><label>Venta</label></th>
       <th><label>Categoria</label></th>
       <th><label>Disponible</label></th>
       <th></th>
       <th></th>

     </tr>
   </thead>
   <tbody>
     <?php
     if ($_POST) {
      if ($_POST['buscar']!="") {
        $sql2 ="select * from productos where NombreProducto like '".$_POST['buscar']."%'";
        $result2 = $conexion->query($sql2);
        if ($result2->num_rows >0) {
         while ($row =$result2->fetch_array()) {
           echo "<tr><td>".$row['NombreProducto']."</td>";
           echo "<td>".$row['descripcion']."</td>";
           echo "<td>".$row['PrecioEntrada']."</td>";
           echo "<td>".$row['PrecioSalida']."</td>";
           echo "<td>".$row['Id_Categoria']."</td>";
           echo "<td>".$row['CantidadPorUnidad']."</td>";
           echo "<td>"."<a href='editarPro.php?id=".$row['idProducto']."'><span class='label label-info'>Editar</span></a></td>";
           echo "<td>"."<a href='eliminarPro.php?id=".$row['idProducto']."'>Eliminar</a></td>";
           echo "</tr>";
         }
       }
     }else{
       while ($row = $result->fetch_array()) {
         echo "<tr><td>".$row['NombreProducto']."</td>";
         echo "<td>".$row['descripcion']."</td>";
         echo "<td>".$row['PrecioEntrada']."</td>";
         echo "<td>".$row['PrecioSalida']."</td>";
         echo "<td>".$row['Id_Categoria']."</td>";
         echo "<td>".$row['CantidadPorUnidad']."</td>";
         echo "<td>"."<a href='editarPro.php?id=".$row['idProducto']."'><span class='label label-info'>Editar</span></a></td>";
         echo "<td>"."<a href='eliminarPro.php?id=".$row['idProducto']."'>Eliminar</a></td>";
         echo "</tr>";
       }
     }
   }else{
     while ($row = $result->fetch_array()) {
      echo "<tr><td>".$row['NombreProducto']."</td>";
      echo "<td>".$row['descripcion']."</td>";
      echo "<td>".$row['PrecioEntrada']."</td>";
      echo "<td>".$row['PrecioSalida']."</td>";
      echo "<td>".$row['Id_Categoria']."</td>";
      echo "<td>".$row['CantidadPorUnidad']."</td>";
      echo "<td>"."<a href='editarPro.php?id=".$row['idProducto']."'><span class='label label-info'>Editar</span></a></td>";
      echo "<td>"."<a href='eliminarPro.php?id=".$row['idProducto']."'>Eliminar</a></td>";
      echo "</tr>";
    }
  }
  ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include_once('librerias/pie.php');
?>