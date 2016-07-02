<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');
$sql="select * from clientes";
$result = $conexion->query($sql);
session_start();
?>
<div class="container">
	<div class="row">
		<div class="col-md-2 col-lg-2" align="left">
				<div class="list-group">
							<a href="#" class="list-group-item active">CLIENTES</a>
							<a href="productos.php" class="list-group-item">PRODUCTOS</a>
							<a href="venta.php" class="list-group-item">REGISTRAR VENTA</a>
							<a href="reportes.php" class="list-group-item">REPORTES</a>
							<a href="pedidos.php" class="list-group-item">PEDIDOS</a>
				</div>
		</div>
	<div class="col-md-10 col-lg-10">
		<div class="row">
			<div class="col-md-9">
				<h1><center>Listado de Clientes</center></h1>
			</div>
			<div class="col-md-3"><br>
				<button class="btn btn-primary btn-lg " value="Nuevo" data-toggle="modal" data-target="#myModal">NUEVO</button>

				<div id="myModal" class="modal fade" role="dialog">
		  				<div class="modal-dialog">
		    			<!-- contenido-->

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
			</div>
		</div>
				<form method="post" action="clientes.php">
					<div class="form-group">
							<label for="username">Buscar por CI</label>
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
							<th>Carnet</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Ciudad</th>
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
								echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'>Editar</a></td>";
										echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'>Eliminar</a></td>";
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
										echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'>Editar</a></td>";
										echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'>Eliminar</a></td>";
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
										echo "<td>"."<a href='editarcli.php?id=".$row['IdCliente']."'>Editar</a></td>";
										echo "<td>"."<a href='eliminarCli.php?id=".$row['IdCliente']."'>Eliminar</a></td>";
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