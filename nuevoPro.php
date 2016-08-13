<?php
include_once('librerias/conexion.php');
include_once('librerias/cabecera.php');

$sql="insert into productos(NombreProducto, descripcion, PrecioEntrada, PrecioSalida, Id_Categoria, CantidadPorUnidad) values('";
$sql.=$_POST['producto']."','".$_POST['descripcion']."','".$_POST['compra']."','".$_POST['venta'];
	$sql.=$_POST['producto']."','".$_POST['descripcion']."','".$_POST['compra']."','".$_POST['venta'];
	$sql.="','".$_POST['categoria']."','".$_POST['cantidad']."')";


if ($conexion->query($sql)) {
	header("Location: productos.php");
}else{
	die();
}
?>
<?php
include_once('librerias/pie.php');
?>