 //*****FUNCION EDITAR*****//
 $('.editarbtn').on('click', function() {
    $tr = $(this).closest('tr');
    var datos = $tr.children("td").map(function() {
        return $(this).text();
    });
    //console.log(data);
    $('#update_id').val(datos[0]);
    $('#editar_nombre').val(datos[1]);
    $('#editar_descripcion').val(datos[2]);
    $('#editar_precio').val(datos[3]);
    $('#editar_fecha').val(datos[4]);
    $('#editar_estado').val(datos[5]);
});
