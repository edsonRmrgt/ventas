<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>.: Login :.</title>

    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-1.10.2.js"></script>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        
          
          <a class="navbar-brand" href="#">Sistema de Ventas de Computadoras y Accesorios <sup><small> </a>
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<br><br><br><br><br>
<div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    	    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesion</h3>
			 	</div>
			  	<div class="panel-body">

			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php">
                        <fieldset>
    			    	  	<div class="form-group">
    			    		    <input class="form-control" name="user" type="text" required="required">
    			    		</div>
    			    		<div class="form-group">
    			    			<input class="form-control"  name="pass" type="password" required="required">
    			    		</div>
    			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesion">
    			    	</fieldset>
			      	</form>

			    </div>
			</div>
		</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
<script src="res/bootstrap3/js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
if ($_POST) {

include_once('librerias/conexion.php');
$sql="select * from usuario";
$result = $conexion->query($sql);
if ($result->num_rows >0) {
            while ($row =$result->fetch_array()) {
                $a = $row['NomUsuario'];
                $b = $row['Clave'];
            }
    
if ($a==$_POST['user']) {
  if($b==md5($_POST['pass'])){
    header("Location: inicio.php");
    }}
}}
?>