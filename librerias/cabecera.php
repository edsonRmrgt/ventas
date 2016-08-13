<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./css/font-awesome.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="css/component.css"rel="stylesheet" >
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
</head>
<body background="img/tx(16).jpg">
<div class="navbar navbar-default navbar-inverse bs-dos-nav navbar-fixed-top sticky-navigation navbar-color-green" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
		<?php
		include_once('librerias/conexion.php');
			session_start();
			if ($_SESSION['id']=='') {
				header("Location: index.php");
			}else{
				echo "<h1 id = 'fe' >".strftime("%d/%m/%y")."</h1>";
				$sql="select * from usuario where idUsuario='". $_SESSION['id']."'";
				$result = $conexion->query($sql);
	    		$row =$result->fetch_array();
    		}
		?>
			</div>
  				<div class="navbar-nav navbar-right main-navigation">
					<div class="btn-group nav">
	  					<label data-toggle="dropdown">
							<?php
								echo "<img src='img/".$row['image'].".jpg' width='50' height='50' class='img img-circle'>";
  								echo "<font size='5' color='#ffffff'> ".$row['NomUsuario']."</font>";
  							?>
	  					</label>
	  					<ul class="dropdown-menu" role="menu">
	    					<li><a href="./configuracion.php"><span class="glyphicon glyphicon-cog"></span>Configuracion</a></li>
	    					<li><a href="./salir.php"><span class="glyphicon glyphicon-off"></span>salir</a></li>
	  					</ul>
					</div>
				</div>
		</div>
	</div>
	<br><br><br><br><br>