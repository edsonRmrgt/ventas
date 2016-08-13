<?php
//include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
//$sql="select nombre_estudiante,apellido_paterno,apellido_materno from estudiante";
//$result = $conexion->query($sql);
?>
<div class="container">
	<div class="row">
		<div class="col-md-2 clo-lg-2" align="left">
			<div class="list-group"> 
				<a href="clientes.php" class="list-group-item">CLIENTES</a>
				<a href="productos.php" class="list-group-item">PRODUCTOS</a>
				<a href="#" class="list-group-item active">REGISTRAR VENTA</a>
				<a href="reportes.php" class="list-group-item">REPORTES</a>
				<a href="pedidos.php" class="list-group-item">PEDIDOS</a>
			</div>
		</div>
		<div class="col-md-10 col-lg-10">

		</div>
	</div>
</div>
<?php
include_once('librerias/pie.php');
?>