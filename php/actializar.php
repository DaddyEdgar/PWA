<?php
include_once '../php/conexion.php';
$id = $_POST['id'];
$nombre = $_POST['editar_nombre']; echo '<br>';
$descripcion = $_POST['editar_descripcion'];
$precio = $_POST['editar_precio'];
$fecha = $_POST['editar_fecha'];
$estado = $_POST['editar_estado'];

$sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', fecha = '$fecha', estado = '$estado' WHERE id = '$id' ";

if (mysqli_query($conexion, $sql)) {
  // echo $sql;
     header("Location: ../agregar");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

?>