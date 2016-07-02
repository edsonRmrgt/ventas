<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from productos";
$result = $conexion->query($sql);
?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-lg-2" align="left">
        <div class="list-group">
              <a href="clientes.php" class="list-group-item">CLIENTES</a>
              <a href="productos.php" class="list-group-item">PRODUCTOS</a>
              <a href="venta.php" class="list-group-item">REGISTRAR VENTA</a>
              <a href="reportes.php" class="list-group-item">REPORTES</a>
              <a href="#" class="list-group-item active">PEDIDOS</a>
        </div>
    </div> 
	<div class="col-md-10">
	<h1>Nuevo Pedido</h1>
	<br>
		<form class="form-horizontal" method="post" action="pedidos.php" role="form">

  <div class="form-group">
        <label class="col-lg-2 control-label">Producto</label>
        <div class="col-md-6">
        <select name="producto" class="form-control">

        <option value="">-- ELIGE UN PRODUCTO --</option>
        <?php
          while ($row =$result->fetch_array()) {
      echo "<option value='".$row['idProducto']."'>".$row['NombreProducto']."</option>";
      }
        ?>
              </select>    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-6">
     <input type="date" class="form-control" name="fecha">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Unidades</label>
    <div class="col-md-6">
      <input type="number" class="form-control" name="unidad" required="required">
    </div>
  </div>

  <div class="form-group">
        <label class="col-lg-2 control-label">Categoria</label>
        <div class="col-md-6">
        <select name="categoria" class="form-control">

        <option value="">-- ELIGE UNA CATEGORIA --</option>
        <?php
        $sql="select * from categorias";
          $result = $conexion->query($sql);
          while ($row =$result->fetch_array()) {
      echo "<option value='".$row['IdCategoria']."'>".$row['NombreCategoria']."</option>";
      }
        ?>
              </select>    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </div>
  </div>
</form>

	</div>
</div>

<?php
if ($_POST) {
  $sql="insert into pedido(idproducto, fecha, unidades, idcategoria) values('";
  $sql.=$_POST['producto']."','".$_POST['fecha']."','".$_POST['unidad']."','".$_POST['categoria']."')";
  if ($conexion->query($sql)) {
    header("Location: pedidos.php");
  }else{
    die();
  }
}
include_once('librerias/pie.php');
?>