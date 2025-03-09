<?php
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $numero=$_POST["numero"];
    $codigoPostal=$_POST["codigoPostal"];
    $localidad=$_POST["localidad"];
    $telefono=$_POST["telefono"];
    $cuit=$_POST["cuit"];

    if(isset($_POST["modificar2"])){
        include("../conexion.php");
        $getmysql= new mysqlconex();
        $getconex = $getmysql->conex();

        $query="UPDATE inquilino SET nombre=?,apellido=?,direccion=?, numero=?, codigoPostal=?, localidad=?, telefono=?, cuit=? WHERE id=?";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sssiisssi",$nombre,$apellido,$direccion,$numero,$codigoPostal,$localidad,$telefono,$cuit,$id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo"<script> alert('El registro ha sido modificado'); location.href='../../propietario.php';</script>";
        } else {
            echo"<script> alert('No se pudo modificar el registro'); location.href='../../propietario.php';</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }
?>
<form action="modificar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
    <label for="apellido">Apellido: </label><input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>"><br>
    <label for="direccion">Dirección: </label><input type="text" name="direccion" id="direccion"value="<?php echo $direccion ?>">
    <label for="numero">Número: </label><input type="text" name="numero" id="numero" value="<?php echo $numero ?>"><br>
    <label for="codigoPostal">Código Postal: </label><input type="text" name="codigoPostal" id="codigoPostal" <?php echo $codigoPostal ?>>
    <label for="localidad">Localidad: </label><input type="text" name="localidad" id="localidad" value="<?php echo $localidad ?>"><br>
    <label for="telefono">Teléfono: </label><input type="text" name="telefono" id="telefono" value="<?php echo $telefono ?>">
    <label for="cuit">CUIT: </label><input type="text" name="cuit" id="cuit" value="<?php echo $cuit ?>"><br>
    <input type="submit" name="modificar2" value="Modificar">
</form>