<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- core CSS Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery (necesarios para Bootstrap JavaScript plugins) -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body background="img/f1.jpg">
<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation navbar-color-green" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<?php
			echo "<b class='navbar-brand'>".strftime("%d/%m/%y")."</b>";
		?>
			</div>
			<nav class="collapse navbar-collapse" id="rock-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
					<li><a href="configuracion.php" class="smoothScroll" >CONFIGURACION</a></li>
					<li><a href="salir.php" class="smoothScroll">SALIR</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<hr><hr>