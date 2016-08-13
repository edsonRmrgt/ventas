<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styleI.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="block">
                    <form class="form" role="form" method="post" action="index.php">
                        <h2 class="titulo">INGRESO AL SISTEMA</h2>
                        <div class="form-group" align="center">
                            <input type="text" placeholder="User" name="user" id = "login" class="form-control">
                            <span class="scnd-font-color"></span>
                        </div>
                        <div class="form-group" align="center">
                            <input type="password" placeholder="Password" name="pass"class="form-control" id="password">
                            <span class="scnd-font-color"></span>
                        </div>
                        <div class="form-group" align="center">
                            <input type="submit" name="submit" value="Sign in" class="btn btn2"><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if ($_POST) {
    include_once('librerias/conexion.php');
    session_start();
    $sql="select * from usuario where NomUsuario='".$_POST['user'];
    $sql.="' and clave='".md5($_POST['pass'])."'";
    $result = $conexion->query($sql);
    $row =$result->fetch_array();
    if ($row>0) {
        $_SESSION['id']=$row['idUsuario'];
        header("Location: inicio.php");
    }else{
        echo "Usuario o contraseña incorrecta";
    }
}
?>