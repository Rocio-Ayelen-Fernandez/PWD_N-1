$(document).ready(function() {

    $('form').on('submit', function(e) {
        let anio = $('#anio').val();
        let duracion = $('#duracion').val();
        let error = 0;

        let fileInput = $('#thumbnail');
        let file = fileInput[0].files[0];
        let allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Limpiar mensajes anteriores
        $('.mensaje').html('');

        // Validar que el campo Año solo contenga 4 dígitos y que sea numérico
        if (anio.length !== 4 || isNaN(anio)) {
            $('#anio').next('.mensaje').html('El año debe tener exactamente 4 números.');
            error++;
        }

        // Validar que el campo Duración solo contenga un máximo de 3 dígitos y que sea numérico
        if (duracion.length > 3 || isNaN(duracion)) {
            $('#duracion').next('.mensaje').html('La duración debe tener un máximo de 3 números.');
            error++;
        }

        // Validación de campos obligatorios
        $('input[type="text"], textarea, select').each(function() {
            if ($(this).val().trim() === '') {
                $(this).next('.mensaje').html('El campo ' + $(this).attr('name') + ' es obligatorio.');
                error++;
            }
        });

        
        // Validar que se haya seleccionado un archivo de imagen
        if (!file) {
            fileInput.next('.mensaje').html('Debe seleccionar un archivo de imagen.');
            error++;
        } else if (!allowedTypes.includes(file.type)) {
            fileInput.next('.mensaje').html('El archivo debe ser una imagen (JPEG, PNG, GIF).');
            error++;
        }


        // Mostrar errores si los hay
        if (error > 0) {
            e.preventDefault();
        }
    });

    // Limpiar mensajes de error al resetear el formulario
    $('button[type="reset"]').on('click', function() {
        $('.mensaje').html('');
    });
});
