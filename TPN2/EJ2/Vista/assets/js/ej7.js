function Validar(event){ 
    let isValid = true;

    $('#calculosForm input[type="text"]').each(function() {
        if ($(this).val().trim() === '') {
            isValid = false;
            alert('Por favor, complete todos los campos.');
        }
    });

    if ($('#op1').val() === '' ||$('#op2').val() === ''  || isNaN($('#op1').val()) || isNaN($('#op2').val())) {
        isValid = false;
        alert('Por favor, seleccione un número válido.');
    }

    if(!isValid){
        event.preventDefault();
    }

    return isValid;
}
