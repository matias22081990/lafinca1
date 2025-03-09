<?php
    include '../conexion.php';
    $getmysql=new mysqlconex();
    $getconex=$getmysql->conex();

    if (isset($_POST["registrar"])){
        $direccion=$_POST["direccion"];
        $numero=$_POST["numero"];
        $codigoPostal=$_POST["codigoPostal"];
        $localidad=$_POST["localidad"];
        $descripcion=$_POST["descripcion"];
        $imagen=$_POST["imagen"];
        $idpropietario=$_POST["idPropietario"];
        $idinquilino=$_POST["idInquilino"];
        $query="INSERT INTO edificio (direccion, numero, codigoPostal, localidad, imagen, idPropietario, idInquilino) VALUES (?,?,?,?,?,?,?,?)";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"siisiii",$direccion,$numero,$codigoPostal,$localidad,$descripcion,$imagen,$idpropietario,$idinquilino,$id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo"<script> alert('Edificio registrado correctamente'); location.href='../../edificio.php';</script>";
        } else {
            echo"<script> alert('No se pudo registrar el Edificio'); location.href='../../edificio.php';</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }
    ?>