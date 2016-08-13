<?php
$carpeta = "./img/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_files['foto']['tmp_name'] , $destino);
?>