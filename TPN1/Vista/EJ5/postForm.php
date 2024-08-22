<?php

include_once '../../utils/funciones.php';
//include_once '../../Control/EJ4/verificarEdad.php';
$datos = darDatosSubmitted();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
    <body>
        <?php echo '<p>Nombre: ' .
            $datos['nombre'] .
            '<br>Apellido: ' .
            $datos['apellido'] .
            '<br>Edad: ' .
            $datos['edad'] .
            '<br>Direccion: ' .
            $datos['direccion'] .
            '<br>Estudios: ' .
            $datos['estudios'] .
            '<br>Sexo: ' .
            $datos['sexo'] .
            '</p>'; ?>

        <a href="form.php">Volver</a>

    </body>

</html>
