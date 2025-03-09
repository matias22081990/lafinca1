<?php
    include '../conexion.php';
    $getmysql=new mysqlconex();
    $getconex=$getmysql->conex();

    if (isset($_POST["registrar"])){
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $direccion=$_POST["direccion"];
        $numero=$_POST["numero"];
        $codigoPostal=$_POST["codigoPostal"];
        $localidad=$_POST["localidad"];
        $telefono=$_POST["telefono"];
        $cuit=$_POST["cuit"];
        $query="INSERT INTO propietario (nombre, apellido, direccion, numero, codigoPostal, localidad, telefono, cuit) VALUES (?,?,?,?,?,?,?,?)";
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sssiisss",$nombre,$apellido,$direccion,$numero,$codigoPostal,$localidad,$telefono,$cuit);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo"<script> alert('Propietario registrado correctamente'); location.href='../../index.php?p=propietario';</script>";
        } else {
            echo"<script> alert('No se pudo registrar al Propietario'); location.href='../../index.php?p=propietario';</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }