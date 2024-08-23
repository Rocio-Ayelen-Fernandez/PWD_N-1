<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form action="accion/Ej1.php" method="get" onSubmit="return Validar();">
        <label for="numero">Ingrese un numero:</label>
        <input type="text"  id="numero" name="numero" >
        <button type="submit">Enviar</button>
    </form> 
    <script>
        function Validar() {
                let isValid = true
                var numero = $("#numero").val();
                 if (numero === '') {
                    alert('Por favor, ingrese un número.');
                    isValid= false;
                }

                if (isNaN(numero)) {
                    alert('Por favor, ingrese un valor numérico válido.');
                    isValid= false;
                }
                return isValid;
            }
    </script>
</body>
</html>
