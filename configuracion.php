<?php
include_once('librerias/cabecera.php');
include_once('librerias/conexion.php');
$sql="select * from usuario";
            
$result = $conexion->query($sql);
?>

<div class="col-md-offset-3 col-md-6 col-md-offset-3">
    <h2>CONFIGURACION</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#datos">DATOS</a></li>
        <li><a data-toggle="tab" href="#pass">PASSWORD</a></li>
        <li><a data-toggle="tab" href="#foto">FOTO</a></li>
    </ul>

    <div class="tab-content">
        <div id="datos" class="tab-pane fade in active">
            <h3>CAMBIO DE DATOS</h3>
            <p>contenido</p>
        </div>
        <div id="pass" class="tab-pane fade">
           <div class="panel panel-danger">
            <div class="panel-heading">
                <label><h3> Cambiar Contraseña </h3></label>
            </div>
            <div class="panel-body">

                <form class="form-horizontal" method="post" action="configuracion.php">
                    <div class="form-group">
                        <label class="control-label col-md-3">Contraseña Actual</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="actual">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" for="pwd">Contraseña Nueva:</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="pwd1" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Repetir Contraseña</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="pwd2" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-2">
                            <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                        <div class="col-md-offset-2 col-md-2">
                            <button type="reset" class="btn btn-default">Limpiar</button>
                        </div>
                        <div class="col-md-offset-2 col-md-2">
                            <a href="inicio.php"> <button class="btn btn-danger" value="Cancelar">Cancelar</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="foto" class="tab-pane fade">
        <h3>FOTO</h3>
        <form class="form-horizontal" method="post" action="librerias/archivo.php" enctype="multipart/form-data">
        <input type="file" name="foto">
        <input type="submit" value="upload" class="btn btn-success btn-sm">
       </form>
   </div>
</div>
</div>
<?php
if ($_POST) {
    $sql="select * from usuario";
    $result2 = $conexion->query($sql);
    if ($result2->num_rows >0) {
        while ($row =$result2->fetch_array()) {
            $a = $row['Clave'];
        }
    }
    if($a==md5($_POST['actual']))
    {
        if($_POST['pwd1']==$_POST['pwd2'])
        {
            $sql="update usuario set Clave='".md5($_POST['pwd1'])."'";
                //$sql.="' WHERE ='".$_POST['idcl']."'";
            $result = $conexion->query($sql);
        }else{
            echo "<script type=\"text/javascript\">alert(\"La contraseña no concide\");</script>";
        }
    }else{
        echo "<script type=\"text/javascript\">alert(\"Introduce tu contraseña actual\");</script>";
    }
}
include_once('librerias/pie.php');
?>