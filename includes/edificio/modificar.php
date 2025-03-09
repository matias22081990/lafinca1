<?php
    $id=$_POST["id"];
    $direccion=$_POST["direccion"];
    $numero=$_POST["numero"];
    $codigoPostal=$_POST["codigoPostal"];
    $localidad=$_POST["localidad"];
    $descripcion=$_POST["descripcion"];
    $imagen=$_POST["imagen"];
    $idPropietario=$_POST["idPropietario"];
    $idInquilino=$_POST["idInquilino"];
    if(isset($_POST["modificar2"])){
        include '../conexion.php';
        $getmysql= new mysqlconex();
        $getconex = $getmysql->conex();

        $query="UPDATE inquilino SET nombre=?,apellido=?,direccion=?, numero=?, codigoPostal=?, localidad=?, descripcion=?, imagen=? WHERE id=?";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"siisssiii",$direccion,$numero,$codigoPostal,$localidad,$descripcion,$imagen,$idPropietario,$idInquilino,$id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo"<script> alert('El registro ha sido modificado'); location.href='../../edificio.php';</script>";
        } else {
            echo"<script> alert('No se pudo modificar el registro'); location.href='../../edificio.php';</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }
?>
<form action="modificar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label for="direccion">Dirección: </label><input type="text" name="direccion" id="direccion"value="<?php echo $direccion ?>">
    <label for="numero">Número: </label><input type="text" name="numero" id="numero" value="<?php echo $numero ?>"><br>
    <label for="codigoPostal">Código Postal: </label><input type="text" name="codigoPostal" id="codigoPostal" <?php echo $codigoPostal ?>>
    <label for="localidad">Localidad: </label><input type="text" name="localidad" id="localidad" value="<?php echo $localidad ?>"><br>
    <label for="descripcion">Descripción: </label><input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion ?>">
    <label for="imagen">Imagen: </label><input type="file" name="imagen" id="imagen" value="<?php echo $imagen ?>"><br>
    <label for="idpropietario">Propietario: </label><input type="text" name="idpropietario" id="idpropietario" value="<?php echo $idPropietario ?>"><br>
    <label for="idinquilino">Inquilino: </label><input type="text" name="idinquilino" id="idinquilino" value="<?php echo $idInquilino ?>"><br>
    <input type="submit" name="modificar2" value="Modificar">
</form>