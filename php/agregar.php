<?php
include_once '../php/conexion.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];

$sql = "INSERT INTO productos (nombre, descripcion, precio, fecha, estado) VALUES ('$nombre', '$descripcion', '$precio', '$fecha', '$estado')";
if (mysqli_query($conexion, $sql)) {
    echo json_encode("Data Inserted Successfully");
    header("Location: ../agregar.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
?>
