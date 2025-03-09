<script>
    function confirmarEliminacion(){
        var respuesta=confirm("¿Desea eliminar este registro?");
        if (respuesta==true){
            return true;
        } else {
            return false;
        }
    }
    function confirmarModificacion(){
        var respuesta=confirm("¿Desea Modificar este registro?");
        if (respuesta==true){
            return true;
        } else {
            return false;
        }
    }
</script>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>DIRECCIÓN</th>
            <th>NÚMERO</th>
            <th>Código Postal</th>
            <th>Localidad</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Propietario</th>
            <th>Inquilino</th>
            <th>ACCIONES</th>
        </thead>
        <tbody>
            <?php 
            include 'includes/conexion.php';
            $getmysql=new mysqlconex();
            $getconex=$getmysql->conex();
            
            $consulta="SELECT * FROM edificio";
            $resultado=mysqli_query($getconex,$consulta);
            while($fila=mysqli_fetch_row($resultado)){
                echo "<tr>";
                echo "<td class='align-middle'>".$fila[0]."</td>";
                echo "<td class='align-middle'>".$fila[1]."</td>";
                echo "<td class='align-middle'>".$fila[2]."</td>";
                echo "<td class='align-middle'>".$fila[3]."</td>";
                echo "<td class='align-middle'>".$fila[4]."</td>";
                echo "<td class='align-middle'>".$fila[5]."</td>";
                echo "<td class='align-middle'>".$fila[6]."</td>";
                echo "<td class='align-middle'>".$fila[7]."</td>";
                echo "<td class='align-middle'>".$fila[8]."</td>";
                echo "<td class='align-middle' style='display:inline-flex'>
                <form action='includes/edificio/eliminar.php' method='POST'>
                    <input type='hidden' name='id' value='".$fila[0]."'>
                    <button type='submit button' class='btn btn-danger py-0' name='eliminar'value='Eliminar' onclick='return confirmarEliminacion()'><i class='bi bi-trash'></i></button>
                </form>
                <form action='includes/edificio/modificar.php' method='POST'>
                    <input type='hidden' name='id' value='".$fila[0]."'>
                    <input type='hidden' name='direccion' value='".$fila[1]."'>
                    <input type='hidden' name='numero' value='".$fila[2]."'>
                    <input type='hidden' name='codigoPostal' value='".$fila[3]."'>
                    <input type='hidden' name='localidad' value='".$fila[4]."'>
                    <input type='hidden' name='descripcion' value='".$fila[5]."'>
                    <input type='hidden' name='imagen' value='".$fila[6]."'>
                    <input type='hidden' name='idPropietario' value='".$fila[7]."'>
                    <input type='hidden' name='idInquilino' value='".$fila[8]."'>
                    <button type='submit button' class='btn btn-success py-0' name='modificar'value='Modificar' onclick='return confirmarModificacion()'><i class='bi bi-pencil-square'></i></button>
                </form>
                </td>";
                echo "</tr>";
            }
            mysqli_close($getconex);
            ?>
        </tbody>
    </table>
</div>