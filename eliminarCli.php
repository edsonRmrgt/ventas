<?php
include_once('librerias/conexion.php');
$sql="delete from clientes where IdCliente='".$_GET['id']."'";
$result = $conexion->query($sql);
header("Location: clientes.php")
?>