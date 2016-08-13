<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from clientes";
$result = $conexion->query($sql);
?>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3" align="left">
			<div class="list-group nav navbar-nav side-nav">
				<a href="#" class="list-group-item active"><span class="glyphicon glyphicon-lock"></span><label>CLIENTES</label></a>
				<a href="productos.php" class="list-group-item"><span class="glyphicon glyphicon-lock"></span><label>PRODUCTOS</label></a>
				<a href="venta.php" class="list-group-item"><span class="glyphicon glyphicon-lock"></span><label>REGISTRAR VENTA</label></a>
				<a href="reportes.php" class="list-group-item"><span class="glyphicon glyphicon-lock"></span><label>REPORTES</label></a>
				<a href="pedidos.php" class="list-group-item"><span class="glyphicon glyphicon-lock"></span><label>PEDIDO</label></a>
			</div>
		</div>
		<div class="col-md-9 col-lg-9">

			<div class="row">
				<!--ROW3--><div class="row">
				<div class="col-md-4">
					<h1><center><label>Listado de Clientes</label></center></h1>
				</div>
				<div class="col-md-3"><br>
					<button class="md-trigger btn btn-success" data-modal="modal-9">NUEVO</button>

					<div class="md-modal md-effect-13" id="modal-9">
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
							<input type="text" name="buscar" class="buscar">
							<input type="submit" class="btn btn-default" value="Buscar">
				</div>
			</form>
			<br>
			<!--ROW4--><div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover" border="0">
						<thead>
							<tr>
								<th><label>Carnet</label></th>
								<th><label>Nombres</label></th>
								<th><label>Apellidos</label></th>
								<th><label>Direccion</label></th>
								<th><label>Telefono</label></th>
								<th><label>Ciudad</label></th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($_POST) {
								if ($_POST['buscar']!="") {
									$sql2 ="select * from clientes where carnet like '".$_POST['buscar']."%'";
									$result2 = $conexion->query($sql2);
									if ($result2->num_rows >0) {
										while ($row =$result2->fetch_array()) {
											echo "<tr><td>".$row['carnet']."</td>";
											echo "<td>".$row['Nombres']."</td>";
											echo "<td>".$row['Apellidos']."</td>";
											echo "<td>".$row['Direccion']."</td>";
											echo "<td>".$row['Telefono']."</td>";
											echo "<td>".$row['Ciudad']."</td>";
											echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'><span class='label label-info'>Editar</span></a></td>";
											echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'><label class='label label-danger' id='notification-trigger'>Eliminar</label></a></td>";
											echo "</tr>";
										}
									}else{
										echo "_--No hay registros--_";
									}
								}else{
									while ($row = $result->fetch_array()) {
										echo "<tr><td>".$row['carnet']."</td>";
										echo "<td>".$row['Nombres']."</td>";
										echo "<td>".$row['Apellidos']."</td>";
										echo "<td>".$row['Direccion']."</td>";
										echo "<td>".$row['Telefono']."</td>";
										echo "<td>".$row['Ciudad']."</td>";
										echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'><span class='label label-info'>Editar</span></a></td>";
										echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'><label class='label label-danger' id='notification-trigger'>Eliminar</label></a></td>";
										echo "</tr>";
									}
								}
							}else{
								while ($row = $result->fetch_array()) {
									echo "<tr><td>".$row['carnet']."</td>";
									echo "<td>".$row['Nombres']."</td>";
									echo "<td>".$row['Apellidos']."</td>";
									echo "<td>".$row['Direccion']."</td>";
									echo "<td>".$row['Telefono']."</td>";
									echo "<td>".$row['Ciudad']."</td>";
									echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'><span class='label label-info'>Editar</span></a></td>";
									echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'><label class='label label-danger' id='notification-trigger'>Eliminar</label></a></td>";
									echo "</tr>";
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div><!--col12-->
		</div><!--ROW4-->
	</div>
</div><!--md-10-->
</div><!--row-->
</div>
<?php
include_once('librerias/pie.php');
