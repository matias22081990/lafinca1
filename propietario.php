<h1> </h1>
<div class="input-group mb-1">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalRegistrar">
        Registrar Propietario
    </button>
</div>

<h1> </h1>
<?php include "includes/propietario/listar.php" ?>
<form action="includes/propietario/insertar.php" method="POST">
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="modalRegistrarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalRegistrarLabel">Registrar Propietario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal -->
                    <div class="row">
                        <div class="mb-2 col-sm-6"> <!-- Fila Nombre -->
                            <label for="nombre" class="col-form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" minlength="1" maxlength="50">

                        </div>
                        <div class="col-sm-6"> <!-- Fila Apellido -->
                            <label for="apellido" class="col-form-label">Apellido: </label>
                            <input type="text" class="form-control" name="apellido" id="apellido" minlength="1" maxlength="50">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Direccion -->
                            <label for="direccion" class="col-form-label">Dirección: </label>
                            <input type="text" class="form-control" name="direccion" id="direccion" minlength="1" maxlength="50">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Número -->
                            <label for="numero" class="col-form-label">Número: </label>
                            <input type="text" class="form-control" name="numero" id="numero" onkeypress="return /^[0-9]*$/.test(event.key);" minlength="1" maxlength="11">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Código Postal -->
                            <label for="codigoPostal" class="col-form-label">Código Postal: </label>
                            <input type="text" class="form-control" name="codigoPostal" id="codigoPostal" onkeypress="return /^[0-9]*$/.test(event.key);" minlength="1" maxlength="11">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Localidad -->
                            <label for="localidad" class="col-form-label">Localidad: </label>
                            <input type="text" class="form-control" name="localidad" id="localidad" minlength="1" maxlength="50">
                        </div>
                        <div class="col-sm-6"><!-- Fila Teléfono -->
                            <label for="telefono" class="col-form-label">Teléfono: </label>
                            <input type="text" class="form-control" name="telefono" id="telefono" onkeypress="return /^[0-9]*$/.test(event.key);" minlength="1" maxlength="50">
                        </div>
                        <div class="col-sm-6"> <!-- Fila CUIT -->
                            <label for="cuit" class="col-form-label">CUIT: </label>
                            <input type="text" class="form-control" name="cuit" id="cuit" onkeypress="return /^[0-9]*$/.test(event.key);" minlength="1" maxlength="13">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit button" class="btn btn-primary" name="registrar">Registrar</button>
                </div>
            </div>
</form>

<form action="includes/propietario/modificar.php" method="POST">
    <div class="modal fade" id="modalModificar" tabindex="-2" aria-labelledby="modalModificarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalModificarLabel">Modificar Propietario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Modal -->
                    <div class="row">
                        <div class="mb-2 col-sm-6"> <!-- Fila Nombre -->
                            <label for="nombre" class="col-form-label">Nombre: </label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="col-sm-6"> <!-- Fila Apellido -->
                            <label for="apellido" class="col-form-label">Apellido: </label>
                            <input type="text" class="form-control" name="apellido" id="apellido">
                        </div>
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
                        <div class="col-sm-6"><!-- Fila Teléfono -->
                            <label for="telefono" class="col-form-label">Teléfono: </label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                        </div>
                        <div class="col-sm-6"> <!-- Fila CUIT -->
                            <label for="cuit" class="col-form-label">CUIT: </label>
                            <input type="text" class="form-control" name="cuit" id="cuit"><br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit button" class="btn btn-primary" name="modificar">Modificar</button>
                </div>
            </div>
</form>