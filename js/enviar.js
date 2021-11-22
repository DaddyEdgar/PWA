$(document).ready(function (e) {
    consultardatos();
    $('#btnagregar').click(function () {
        var JAVAnombre = $('#nombre').val();
        var JAVAdescripcion = $('#descripcion').val();
        var JAVAprecio = $('#precio').val();
        var JAVAfecha = $('#fecha').val();
        var JAVAestado = $('#estado').val();
        console.log(' Nombre ' + nombre + ' DESCRIPCION' + descripcion + ' PRECIO ' + precio + ' FECHA ' + fecha + ' ESTADO ' + estado);

        $.ajax({
            url: "php/agregar.php",
            type: "post",
            data: {
                nombre: JAVAnombre,
                descripcion: JAVAdescripcion,
                precio: JAVAprecio,
                fecha: JAVAfecha,
                estado: JAVAestado
            },
            success: function (data) {
                console.log(data);
                $('#formulario').find('input:text').val('');
                $('#formulario').find('input:date').val('');
                consultardatos();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
    
});




/* SI FUNCIONA

function consultardatos() {
    $(document).ready(function () {
        //$('#tabla').html(data);
        $.ajax({
            url: "php/consulta.php",
            success: function (data) {
                console.log(data);
                $('#tabla').html(data);



            },
            error: function (data) {
                console.log(data);
            }
        });

    });
}


*/