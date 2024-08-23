<?php

include_once '../../../utils/funciones.php';
include_once '../../Control/Persona.php';
include_once '../../Control/Deportes.php';
//include_once '../../Control/EJ4/verificarEdad.php';
$datos = darDatosSubmitted();
$deportes = $persona->mostrarDeportes();
$mensaje = "Hola, yo soy " .$persona->getNombre()." ". $persona->getApellido().".Tengo ". $persona->getEdad(). " y vivo en ". $persona->getDireccion() . "Mi género es ".$persona->getGenero(). " y mi nivel de estudios es ". $persona->getEstudios(). "Los deportes que practico son ". $deportes."\n";


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
        <?php echo $mensaje; ?>

        <a href="form.php">Volver</a>

    </body>

</html>
