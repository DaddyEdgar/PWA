<?php 
$conexion = new mysqli("localhost", "root", "", "pwa");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a la base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>