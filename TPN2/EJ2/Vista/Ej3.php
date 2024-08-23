<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <div id="contenedor">
        <h1>Ingrese sus datos</h1>
        <div id="formulario">
            <form action="accion/Ej3.php" method="post" onSubmit="return Validar();">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" size="15" ><br>

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" size="15" ><br>

                <label for="edad">Edad</label>
                <input type="text" id="edad" name="edad" size="15" ><br>

                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" name="direccion" size="15" ><br>

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
                if(nombre === "" || apellido === "" || edad === "" || direccion === "" || isNaN(edad)){
                    alert("Por favor, ingrese un valor válido");
                    isValid=false
                }
                return isValid;
            }
    </script>
</body>
</html>