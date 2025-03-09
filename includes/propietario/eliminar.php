<?php
include '../conexion.php';
$getmysql=new mysqlconex();
$getconex=$getmysql->conex();

if(isset($_POST["eliminar"])){
    $id=$_POST["id"];

    $query="DELETE FROM propietario WHERE id=?";
    $sentencia=mysqli_prepare($getconex,$query);
    mysqli_stmt_bind_param($sentencia,"i",$id);
    mysqli_stmt_execute($sentencia);
    $afectado=mysqli_stmt_affected_rows($sentencia);
    if($afectado == 1){
        echo "<script>alert('Registro eliminado'); location.href='../../index.php?p=propietario' </script>";
    } else {
        echo "<script>alert('El registro no se pudo eliminar'); location.href='../../index.php?p=propietario' </script>";
    }
}