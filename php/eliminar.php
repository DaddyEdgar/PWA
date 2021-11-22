<?php
include_once '../php/conexion.php';
$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id = '$id'";
if (mysqli_query($conexion, $sql)) {
    header("Location: ../agregar");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
?>
