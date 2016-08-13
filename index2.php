<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from clientes";
$result = $conexion->query($sql);
?>
<div class="container">
	<div class="row">
		<div class="col-md-2 col-lg-2" align="left">
			<div class="list-group nav navbar-nav side-nav">
				<a href="#" class="list-group-item active">CLIENTES</a>
				<a href="productos.php" class="list-group-item">PRODUCTOS</a>
				<a href="venta.php" class="list-group-item">REGISTRAR VENTA</a>
				<a href="reportes.php" class="list-group-item">REPORTES</a>
				<a href="pedidos.php" class="list-group-item">PEDIDOS</a>
			</div>
		</div>
		<div class="col-md-10 col-lg-10">
			<div class="row">
				<!--ROW3--><div class="row">
				<div class="col-md-4">
					<h1><center>Listado de Clientes</center></h1>
				</div>
				<div class="col-md-3"><br>
					<button class="md-trigger" data-modal="modal-9">3D Flip (vertical)</button>

					<div class="md-modal md-effect-9" id="modal-9">
						<div class="md-content">
							<div class="modal-content">
								<div class="panel-heading" id="pane">
									<p id="p2" class="panel-title text-center text-primary"><strong>Datos del Cliente</strong></p>
								</div>

								<div class="panel-body">
									<div class="col-md-offset-2 col-md-8">
										<form method="post" action="nuevocli.php" id="form2">
											<div class="form-group">
												<label>CI</label>
												<input type="number" class="form-control" name="ci" required="required">
											</div>
											<div class="form-group">
												<label>Nombres</label>
												<input type="text" class="form-control" name="nombre" required="required">
											</div>
											<div class="form-group">
												<label>Apellidos</label>
												<input type="text" class="form-control" name="apellido" required="required">
											</div>
											<div class="form-group">
												<label>Direccion</label>
												<input type="text" class="form-control" name="direccion" required="required">
											</div>
											<div class="form-group">
												<label>TELEFONO</label>
												<input type="number" class="form-control" name="telefono" required="required">
											</div>
											<div class="form-group">
												<label>Ciudad</label>
												<input type="text" class="form-control" name="ciudad" required="required">
											</div>
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

					<div class="md-overlay"></div><!-- the overlay element -->
					</div>
				<div class="col-md-2"><br><a href="pdf.php"><img src="img/pdf.png" width="50" height="50"><a>
				</div>
			</div><!--ROW3-->
			<form method="post" action="clientes.php">
				<div class="form-group">
					<label for="username">Buscar por CI</label>
					<div class="row">
						<div class="col-md-10">
							<h1><span class = "glyphicon glyphicon-search">
								<input type="text" name="buscar" class="buscar">
							</span></h1>
						</div>
						<div class="col-md-2">
							<input type="submit" class="btn btn-default" value="Buscar">
						</div>
					</div>
				</div>
			</form>
			<br>



				</div><!--md-10-->
			</div><!--row-->
		</div><!--Container-->
		
		<div class="container">
			<div class="column">
				<button class="md-trigger" data-modal="modal-9">3D Flip (vertical)</button>
			</div>
			<?php
			include_once('librerias/pie.php');
			?>