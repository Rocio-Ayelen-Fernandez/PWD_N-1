<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="accion/Ej2.php" method="post" onSubmit="return Validar();">
        <label for="lunes">Lunes:</label>
        <input type="number" id="lunes" name="horas[lunes]" min="0" size="5">

        <label for="martes">Martes:</label>
        <input type="number" id="martes" name="horas[martes]" min="0" size="5">

        <label for="miercoles">Miércoles:</label>
        <input type="number" id="miercoles" name="horas[miercoles]" min="0" size="5">

        <label for="jueves">Jueves:</label>
        <input type="number" id="jueves" name="horas[jueves]" min="0" size="5">

        <label for="viernes">Viernes:</label>
        <input type="number" id="viernes" name="horas[viernes]" min="0" size="5">
        <button type="submit">Enviar</button>
    </form> 
    <script>
     function Validar() {
    var isValid = true;
    $('input[type="number"]').each(function() {
        var value = $(this).val();
        if (value === '' || isNaN(value) || value < 0) {
            alert('Por favor, ingrese un número válido para todos los días.');
            isValid = false;
        }
    });
    return isValid;
}
    </script>   
</body>
</html>



