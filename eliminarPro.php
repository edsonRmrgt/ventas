<?php
include_once('librerias/conexion.php');
$sql="delete from productos where idProducto='".$_GET['id']."'";
$result = $conexion->query($sql);
header("Location: productos.php")
?>