<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div id="contenedor">
        <div id="consigna">
            <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica.</p>
        </div>
        <div id="formulario">
            <form id="datosForm" action="postForm.php" method="post" onSubmit="return Validar();">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" size="15" required><br>

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" size="15" required><br>

                <label for="edad">Edad</label>
                <input type="text" id="edad" name="edad" size="15" required><br>

                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" name="direccion" size="15" required><br>

                <label for="estudios">Estudios</label><br>
                No tiene estudios
                <input type="radio" id="sinEstudios" name="estudios" value="sinEstudios"><br>
                Estudios Primarios
                <input type="radio" id="primarios" name="estudios" value="primarios"><br>
                Estudios Secundarios
                <input type="radio" id="secundarios" name="estudios" value="secundarios"><br>

                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="x">X</option>
                </select> <br><br>

                <label for="estudios">Deportes<br>Seleccione todos los que apliquen</label><br>
                Futbol
                <input type="checkbox" id="Futbol" name="deporte[]" value="Futbol">
                Basket
                <input type="checkbox" id="Basket" name="deporte[]" value="Basket">
                Tenis
                <input type="checkbox" id="Tenis" name="deporte[]" value="Tenis">
                Voley
                <input type="checkbox" id="Voley" name="deporte[]" value="Voley">
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <script>
      function Validar(){ 
                let isValid = true;
                const nombre = $("#nombre").val();
                const apellido = $("#apellido").val();
                const edad = $("#edad").val();
                const direccion = $("#direccion").val();
                if($nombre === "" || $apellido === "" || $edad === "" || $direccion === "" || isNaN($edad)){
                    alert("Por favor, ingrese un valor válido");
                    e.preventDefault();
                    isValid=false;
                }
                $('#datosForm input[type="text"]').each(function() {
                    if ($(this).val().trim() === '') {
                        isValid = false;
                        alert('Por favor, complete todos los campos de texto.');
                    }
                });
                if ($('input[name="deportes[]"]:checked').length == 0) {
                    alert("Por favor selecciona al menos un deporte.");
                    isValid= false;
                    return false;
                }
                if (!$('input[name="estudios"]:checked').val()) {
                    isValid = false;
                    alert('Por favor, seleccione su nivel de estudios.');
                }
                if ($('#sexo').val() === '') {
                    isValid = false;
                    alert('Por favor, seleccione su sexo.');
                }

                return isValid;
            };
    </script>
</body>
</html>