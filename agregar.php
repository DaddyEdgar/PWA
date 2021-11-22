<?php
include_once 'php/conexion.php';
include_once 'global/cabezera.php';
?>
<script src="js/validar.js"></script>

<br><br>
<div class="container">

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <!--  id="formulario" -->
            <form action="php/agregar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" onkeypress="return validarletras(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="Descripción">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" onkeypress="return validarletras(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" onkeypress="return solonumeros(event)" onpaste="return false" required>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="custom-select" required>
                        <option selected value="Disponible">Disponible</option>
                        <option value="No disponible">No disponible</option>
                    </select>
                </div>
                <!-- <button type="button" id="btnagregar" class="btn btn-success">Agregar</button>-->
                <button type="submit" class="btn btn-success">Agregar</button>
            </form>
        </div>


        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="table-responsive">

                <!--  <section id="Mitabla"></section> -->
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody id="registros">
                        <?php
                        $sql = "SELECT * FROM productos";
                        $resultado = mysqli_query($conexion, $sql);
                        foreach ($resultado as $fila) {
                        ?>
                            <tr>

                                <td> <?php echo $fila['id'] ?></td>
                                <td> <?php echo $fila['nombre'] ?></td>
                                <td> <?php echo $fila['descripcion'] ?></td>
                                <td> <?php echo $fila['precio'] ?></td>
                                <td> <?php echo $fila['fecha'] ?></td>
                                <td> <?php echo $fila['estado'] ?></td>
                                <td>

                                    <a href="php/eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    <button type="submit" class="btn btn-warning editarbtn" data-toggle="modal" data-target="#ModalEditar" data-whatever="@getbootstrap">Editar</button>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    /*
    $(document).ready(function() {
        console.log("ready!");

        function tiemporeal() {
            var tabla = $.ajax({
                url: 'php/consulta.php',
                type: 'POST',
                dataType: 'text',
                async: false
            }).responseText;
            document.getElementById('Mitabla').innerHTML = tabla;
        }
        setInterval(tiemporeal, 1000);

    });
    */
</script>






<div id="tabla">

</div>

<?php
include_once 'global/modal.php';
?>

<script src="js/enviar.js"></script>
<script src="js/editar.js"></script>
<?php
include_once 'global/pie.php';
?>