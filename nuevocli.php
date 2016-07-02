<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');

$sql="insert into clientes(carnet,Nombres,Apellidos,Direccion,Telefono,Ciudad) values('";
$sql.=$_POST['ci']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['direccion'];
$sql.="','".$_POST['telefono']."','".$_POST['ciudad']."')";


if ($conexion->query($sql)) {
	header("Location: clientes.php");
}else{
	die();
}
?>
<?php
include_once('librerias/pie.php');
?>