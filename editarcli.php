<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from clientes where IdCliente='".$_GET['id']."'";
$result = $conexion->query($sql);
while ($row =$result->fetch_array()) {
	$id = $row['IdCliente'];
	$a = $row['carnet'];
	$b = $row['Nombres'];
	$c = $row['Apellidos'];
	$d = $row['Direccion'];
	$e = $row['Telefono'];
	$f = $row['Ciudad'];
}
?>
<div class="row">
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<form method="post" action="editarcli.php">
			<input type="hidden" class="form-control" name="idcl" required="required" value="<?php echo $id ?>">
			<div class="form-group">
				<label>CI</label>
				<input type="number" class="form-control" name="ci" required="required" value="<?php echo $a ?>">
			</div>
			<div class="form-group">
				<label>Nombres</label>
				<input type="text" class="form-control" name="nombre" required="required" value="<?php echo $b ?>">
			</div>
			<div class="form-group">
				<label>Apellidos</label>
				<input type="text" class="form-control" name="apellido" required="required" value="<?php echo $c ?>">
			</div>
			<div class="form-group">
				<label>Direccion</label>
				<input type="text" class="form-control" name="direccion" required="required" value="<?php echo $d ?>">
			</div>
			<div class="form-group">
				<label>TELEFONO</label>
				<input type="number" class="form-control" name="telefono" required="required" value="<?php echo $e ?>">
			</div>
			<div class="form-group">
				<label>Ciudad</label>
				<input type="text" class="form-control" name="ciudad" required="required" value="<?php echo $f ?>">
			</div>
			<div class="form-group">
				<input type="submit" class=" btn btn-sm btn-primary" value="Confirmar">
			</div>
		</form>
	</div>
</div>
<?php
if ($_POST) {
	$sql="update clientes set carnet='".$_POST['ci']."',Nombres ='".$_POST['nombre']."',Apellidos ='".$_POST['apellido'];
	$sql.="',Direccion ='".$_POST['direccion']."',Telefono ='".$_POST['telefono']."',Ciudad ='".$_POST['ciudad']."' WHERE IdCliente='".$_POST['idcl']."'";
	$result = $conexion->query($sql);
	header("Location: clientes.php");
}
include_once('librerias/pie.php');
?>