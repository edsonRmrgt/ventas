<?php
include_once('librerias/cabecera.php');
?>

<div class="container">
	<br><br><br><br><br><br>
	<div class="row"> 
		<div align ="center">
			
			<a href="clientes.php" class=" btn btn-primary btn-md" role="button"><h2 class="cuadros"><span class="glyphicon glyphicon-user"></span>CLIENTE</h2></a>
			<a href="venta.php" class=" btn btn-info btn-md "role="button"> <h2 class="cuadros"><span class="glyphicon glyphicon-shopping-cart"> </span> REGISTRAR VENTAS</h2></a>
			<a href="pedidos.php" class="btn btn-primary btn-md "role="button"> <h2 class="cuadros"><span class="glyphicon glyphicon-list-alt"> </span> PEDIDOS </h2></a>
			<a href="productos.php" class=" btn btn-primary btn-md  "role="button" > <h2 class="cuadros"><span class="glyphicon glyphicon-hdd" > </span> PRODUCTOS </h2></a>
			<a href="reportes.php" class=" btn btn-info btn-md   "role="button"> <h2 class="cuadros"><span class="glyphicon glyphicon-pencil"> </span> REPORTES </h2></a>
			<a href="agregar.php" class=" btn btn-primary btn-md   "role="button"> <h2 class="cuadros"><span class="glyphicon glyphicon-pencil"> </span> NUEVO USUARIO </h2></a>

		</div>
		<?php
		include_once('librerias/pie.php');
		?>