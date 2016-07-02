 <?php
 $conexion;
          $server = "localhost";
           $usuario = "root";
            $pass = "";
             $db = "venta";
            $conexion =  new mysqli($server, $usuario, $pass, $db);
            if ($conexion->connect_errno) {
                die("fallo el tratar de  conectar con mysql (". $conexion->connect_errno.")");
            }
?>
