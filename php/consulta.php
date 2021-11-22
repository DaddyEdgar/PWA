<?php
include_once 'conexion.php';

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);



echo '<table class="table table-hover" id="dataTable">
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
                    <tbody id="registros">';

                        
                        $sql = "SELECT * FROM productos";
                        $resultado = mysqli_query($conexion, $sql);
                        foreach ($resultado as $fila) {
                        
                          echo '  <tr>

                                <td> '. $fila['id'] .'</td>
                                <td> '. $fila['nombre'] .'</td>
                                <td> '. $fila['descripcion'] .'</td>
                                <td> '. $fila['precio'] .'</td>
                                <td> '. $fila['fecha'] .'</td>
                                <td> '. $fila['estado'] .'</td>
                                <td>
                                    <a href="php/eliminar.php?id='. $fila['id'] .'"  class="btn btn-danger">Eliminar</a>
                                   
                                </td>
                            </tr>';
                         } 
                    echo '</tbody>
                </table> ';


?>

<!--  <button type="submit" class="btn btn-warning editarbtn" data-toggle="modal" data-target="#ModalEditar" data-whatever="@getbootstrap">Editar</button>-->