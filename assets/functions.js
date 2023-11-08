// Inicializo automáticamente la función read al entrar a la página o recargarla.
addEventListener('load', read, false);

function read() {
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=table_envios',
        beforeSend: function () {
            $("#information").html("Procesando, espere por favor...");
        },
        success: function (response) {
            $("#information").html(response);
        }
    });
}

function registerEnvio() {
    var formData = new FormData(document.forms.namedItem("formEnvio"));
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=registerenvio',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            read();
            alert('Los datos se guardaron correctamente.');
            $('#addEnvio').modal('hide');
        }
    });
}

function updateEnvio() {
    var id_envio = document.formEnvioUpdate.id_envio.value;
    var id_producto = document.formEnvioUpdate.id_producto.value;
    var n_telefono = document.formEnvioUpdate.n_telefono.value;
    var direccion = document.formEnvioUpdate.direccion.value;
    var correo = document.formEnvioUpdate.correo.value;
    var nombres = document.formEnvioUpdate.nombres.value;
    var id_usuario = document.formEnvioUpdate.id_usuario.value;
    var precio_de_envio = document.formEnvioUpdate.precio_de_envio.value;
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=updateenvio',
        data: {
            id_envio: id_envio,
            id_producto: id_producto,
            n_telefono: n_telefono,
            direccion: direccion,
            correo: correo,
            nombres: nombres,
            id_usuario: id_usuario,
            precio_de_envio: precio_de_envio
        },
        success: function (response) {
            read();
            $('#updateEnvio').modal('hide');
        }
    });
}


function deleteEnvio(id) {
    if (confirm('¿Está seguro de eliminar este registro?')) {
        $.ajax({
            type: 'POST',
            url: '?c=administrator&m=deleteenvio',
            data: {
                id: id
            },
            success: function (response) {
                read();
            }
        });
    }
}

function ModalRegisterEnvio() {
    $('#addEnvio').modal('show');
}

function ModalUpdate(id_envio, id_producto, n_telefono, direccion, correo, nombres, id_usuario, precio_de_envio) {
    document.formEnvioUpdate.id_envio.value = id_envio;
    document.formEnvioUpdate.id_producto.value = id_producto;
    document.formEnvioUpdate.n_telefono.value = n_telefono;
    document.formEnvioUpdate.direccion.value = direccion;
    document.formEnvioUpdate.correo.value = correo;
    document.formEnvioUpdate.nombres.value = nombres;
    document.formEnvioUpdate.id_usuario.value = id_usuario;
    document.formEnvioUpdate.precio_de_envio.value = precio_de_envio;
    $('#updateEnvio').modal('show');
}
