<?php

include_once '../../../utils/funciones.php';
include_once '../../Control/EJ2/Horas.php';

$datos = darDatosSubmitted();


$mensaje = null;
$objHoras = new Horas();
$mensaje = $objHoras->darHoras($datos);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Horas</title>
</head>
<body>
    <?php if ($mensaje==!null) {
        
        echo "<p>La cantidad total de horas de cursada por semana es: $mensaje horas.</p>";
    } else {
        echo '<p>No se ingresaron datos.</p>';
    } ?>
    <a href="form.php">Volver</a>
</body>
</html>
