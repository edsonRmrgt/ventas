<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from productos where idProducto='".$_GET['id']."'";
$result = $conexion->query($sql);
while ($row =$result->fetch_array()) {
	$id = $row['idProducto'];
	$a = $row['NombreProducto'];
	$b = $row['descripcion'];
	$c = $row['PrecioEntrada'];
	$d = $row['PrecioSalida'];
	$e = $row['CantidadPorUnidad'];
	}
?>
<div class="row">
<div class="col-md-offset-3 col-md-6 col-md-offset-3">
<form method="post" action="editarPro.php">
<input type="hidden" class="form-control" name="idpro" required="required" value="<?php echo $id ?>">
		<div class="form-group">
			<label>PRODUCTO</label>
			<input type="number" class="form-control" name="producto" required="required" value="<?php echo $a ?>">
		</div>
		<div class="form-group">
			<label>DESCRIPCION</label>
			<input type="text" class="form-control" name="descripcion" required="required" value="<?php echo $b ?>">
		</div>
		<div class="form-group">
			<label>PRECIO COMPRA</label>
			<input type="text" class="form-control" name="compra" required="required" value="<?php echo $c ?>">
		</div>
		<div class="form-group">
			<label>PRECIO VENTA</label>
			<input type="text" class="form-control" name="venta" required="required" value="<?php echo $d ?>">
		</div>
		<div class="form-group">
			<label>CANTIDAD</label>
			<input type="number" class="form-control" name="cantidad" required="required" value="<?php echo $e ?>">
		</div>
	<div class="form-group">
		<input type="submit" class=" btn btn-sm btn-primary" value="Confirmar">
		<input type="reset" class="btn btn-sm btn-default" value="limpiar">
	</div>
	</form>
</div>
</div>
<?php
if ($_POST) {
$sql="update productos set NombreProducto='".$_POST['producto']."',descripcion ='".$_POST['descripcion']."',PrecioEntrada ='".$_POST['compra'];
$sql.="',PrecioSalida ='".$_POST['venta']."',CantidadPorUnidad ='".$_POST['cantidad']."' WHERE idProducto='".$_POST['idpro']."'";

$result = $conexion->query($sql);
header("Location: productos.php");
}
include_once('librerias/pie.php');
?>