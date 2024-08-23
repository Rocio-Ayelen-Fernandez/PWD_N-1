<?php

include_once '../../../utils/funciones.php';
include_once '../../Control/Persona.php';
include_once '../../Control/Deportes.php';
//include_once '../../Control/EJ4/verificarEdad.php';
$datos = darDatosSubmitted();

$persona = new Persona($datos);

$deportes = $persona->mostrarDeportes();
$mensaje = "Hola, yo soy " .$persona->getNombre()." ". $persona->getApellido().".<br>Tengo ". $persona->getEdad(). " y vivo en ". $persona->getDireccion() . "<br>Mi género es ".$persona->getGenero(). " y mi nivel de estudios es ". $persona->getEstudios(). "<br>Los deportes que practico son ". $deportes."\n";


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
        <?php echo "<p>".$mensaje."</p>"; ?>

        <a href="form.php">Volver</a>

    </body>

</html>
