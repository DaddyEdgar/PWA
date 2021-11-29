<?php
include_once 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto 2</title>
    <link rel="shortcut icon" href="img/ico.ico" />
    <!--  CSS -->
    <link rel="stylesheet" href="css/loader.css">
    <!-- AJAX VERSION PARA B4-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--App manifest -->
    <link rel="manifest" href="app.webmanifest">

    <!--Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Bootstrap-->
    <!--JQUERY PARA AJAX-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">DMI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="agregar.php">Agregar <span class="sr-only">(current)</span></a>
                </li>

            </ul>

        </div>
    </nav>
    <!--   <center>
    </center>
  <div class="lds-hourglass loader" id="loader"></div>
-->


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