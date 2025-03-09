<h1> </h1>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registrarEdificio">
    Registrar Edificio
</button>
<h1> </h1>
<?php include_once"includes/edificio/listar.php" ?>

<form action="includes/edificio/insertar.php" method="POST">
    <div class="modal fade" id="registrarEdificio" tabindex="-1" aria-labelledby="registrarEdificioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="registrarEdificioLabel">Registrar Edificio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal -->
                    <div class="row">
                        <div class="col-sm-6"> <!-- Fila Direccion -->
                            <label for="direccion" class="col-form-label">Dirección: </label>
                            <input type="text" class="form-control" name="direccion" id="direccion">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Número -->
                            <label for="numero" class="col-form-label">Número: </label>
                            <input type="text" class="form-control" name="numero" id="numero">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Código Postal -->
                            <label for="codigoPostal" class="col-form-label">Código Postal: </label>
                            <input type="text" class="form-control" name="codigoPostal" id="codigoPostal">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Localidad -->
                            <label for="localidad" class="col-form-label">Localidad: </label>
                            <input type="text" class="form-control" name="localidad" id="localidad">
                        </div>
                        <div class="col-sm-6"><!-- Fila Descripción -->
                            <label for="descripcion" class="col-form-label">Descripción: </label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Imagen -->
                            <label for="imagen" class="col-form-label">Imagen: </label>
                            <input type="file" class="form-control" name="imagen" id="imagen"><br>
                        </div>
                        <div class="col-sm-6"> <!-- Fila Propietario -->
                            <label for="idpropietario" class="col-form-label">Propietario: </label>
                            <select name="idPropietario" class="form-control">
                                <?php
                                    require 'conexion.php';
                                    $sql = "select * from propietario order by id";
                                    $result = mysqli_query($conexion, $sql);
                                    if (!$result) {
                                        die("Error en la consulta SQL: " . mysqli_error($conexion));
                                    }
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $idPropietario = $row['id'];
                                        $nombre = $row['nombre'];
                                        $apellido = $row['apellido'];
                                        $cuit = $row['cuit'];
                                        echo "<option value='{$idPropietario}'>{$nombre} {$apellido} {$cuit}</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6"> <!-- Fila Inquilino -->
                            <label for="idinquilino" class="col-form-label">Inquilino: </label>
                            <input type="text" class="form-control" name="idinquilino" id="idinquilino"><br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
                </div>
                </div>
            </div>
</form>