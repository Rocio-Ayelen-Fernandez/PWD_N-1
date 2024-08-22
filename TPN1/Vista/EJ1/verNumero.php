<?php

include_once '../../utils/funciones.php';
include_once '../../Control/EJ1/signo.php';

$datos = darDatosSubmitted();

$objNumero = new Numero();

$mensaje = $objNumero->devolverSigno($datos);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <p><?php echo 'El número ' .
        $datos['numero'] .
        ' es ' .
        $mensaje .
        '.'; ?></p>
    <a href="../../Vista/EJ1/form.php">Volver</a>
</body>
</html>
