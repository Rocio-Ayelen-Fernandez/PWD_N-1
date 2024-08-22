$(document).ready(function() {

    $('form').on('submit', function(e) {
        let user = $('#user').val();
        let password = $('#password').val();
        let error = 0;
        let mensaje = '';

        if (password.length < 8) {
            mensaje += 'La contraseña debe tener al menos 8 caracteres.<br>';
            error++;
        }
        if (user === password) {
            mensaje += 'La contraseña no puede ser igual al nombre de usuario.<br>';
            error++;
        }
        if (!/\d/.test(password)) {
            mensaje += 'La contraseña debe contener al menos un número.<br>';
            error++;
        }

        if (error > 0) {
            e.preventDefault();
            $('#mensajePass').html(mensaje).show();  // Usamos show() en lugar de css('display', 'block')
        }
    });
});
