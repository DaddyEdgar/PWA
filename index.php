<?php
include_once 'php/conexion.php';
include_once 'global/cabezera.php';
?>
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
</div>
<?php
include_once 'global/pie.php';
?>