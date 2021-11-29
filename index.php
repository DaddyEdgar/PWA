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
    <!-- <link rel="manifest" href="./json/manifest.json">-->

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
    <br><br>
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM productos";
            $resultado = mysqli_query($conexion, $sql);
            foreach ($resultado as $fila) {
            ?>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                            <p class="card-text">Descripción: <?php echo $fila['descripcion'] ?></p>
                            <p class="card-text">Precio <?php echo $fila['precio'] ?></p>
                        </div>
                    </div>
                    <br><br>
                </div>
            <?php
            }
            ?>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>
                    <p> What is Lorem Ipsum?</p>
                </strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://st1.uvnimg.com/ff/2f/7d21710e48aabb928c2346aa6dd0/KREWELLA.jpg" class="card-img-top">
                </div>
            </div>
        </div>

    </div>
       
   
   <script src="js/app.js"></script>
    <script src="sw.js"></script>
    <script src="rsw.js"></script>
</body>

</html>