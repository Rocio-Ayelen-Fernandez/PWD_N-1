<?php

include_once "../../../utils/funciones.php";
include_once "../../Control/EJ8/Calculo.php";

$datos = darDatosSubmitted();

$objCalculo = new Calculo();

$resultado= $objCalculo->darPrecio($datos);

$resultado =
$mensaje = "El precio de la entrada es de: $".$resultado;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>".$mensaje."</p>";
    ?>
</body>
</html>