<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$numero = $_POST["numero"];
$codigoPostal = $_POST["codigoPostal"];
$localidad = $_POST["localidad"];
$telefono = $_POST["telefono"];
$cuit = $_POST["cuit"];

if (isset($_POST["modificar2"])) {
    include '../conexion.php';
    $getmysql = new mysqlconex();
    $getconex = $getmysql->conex();

    $query = "UPDATE propietario SET nombre=?,apellido=?,direccion=?, numero=?, codigoPostal=?, localidad=?, telefono=?, cuit=? WHERE id=?";
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "sssiisssi", $nombre, $apellido, $direccion, $numero, $codigoPostal, $localidad, $telefono, $cuit, $id);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('El registro ha sido modificado'); location.href='../../index.php?p=propietario';</script>";
    } else {
        echo "<script> alert('No se pudo modificar el registro'); location.href='../../index.php?p=propietario';</script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>

<form action="includes/propietario/modificar.php" method="POST">
    <div class="modal fade" id="modalModificar1" tabindex="-2" aria-labelledby="modalModificar1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalModificar1Label">Modificar Propietario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal -->
                    <div class="row">
                        <div class="mb-2 col-sm-6"> <!-- Fila Nombre -->
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        </div>
                        <div class="mb-2 col-sm-6"> <!-- Fila Nombre -->
                            <label for="nombre">Nombre: </label>
                            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Apellido -->
                            <label for="apellido">Apellido: </label>
                            <input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>"><br>
                        </div>
                        <div class="col-sm-6"> <!-- Fila Direccion -->
                            <label for="direccion">Dirección: </label>
                            <input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Número -->
                            <label for="numero">Número: </label>
                            <input type="text" name="numero" id="numero" value="<?php echo $numero ?>"><br>
                        </div>
                        <div class="col-sm-6"> <!-- Fila Código Postal -->
                            <label for="codigoPostal">Código Postal: </label>
                            <input type="text" name="codigoPostal" id="codigoPostal" value="<?php echo $codigoPostal ?>">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Localidad -->
                            <label for="localidad">Localidad: </label>
                            <input type="text" name="localidad" id="localidad" value="<?php echo $localidad ?>"><br>
                        </div>
                        <div class="col-sm-6"><!-- Fila Teléfono -->
                            <label for="telefono">Teléfono: </label><input type="text" name="telefono" id="telefono" value="<?php echo $telefono ?>">
                        </div>
                        <div class="col-sm-6"> <!-- Fila CUIT -->
                            <label for="cuit">CUIT: </label>
                            <input type="text" name="cuit" id="cuit" value="<?php echo $cuit ?>"><br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit button" class="btn btn-primary" name="modificar" value="Modificar">Modificar</button>
                </div>
            </div>
</form>