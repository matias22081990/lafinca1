<h1> </h1>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registrar Inquilino
</button>
<h1> </h1>
<?php include_once "includes/inquilino/listar.php"?>

<form action="includes/inquilino/insertar.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
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
                    <button type="submit button" class="btn btn-primary" name="registrar">Registrar</button>
                </div>
            </div>
</form>