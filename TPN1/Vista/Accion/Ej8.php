<?php

include_once "../../../utils/funciones.php";
include_once "../../Control/Persona.php";
include_once "../../Control/Boleto.php";

$datos = darDatosSubmitted();

$boleto = new Boleto($datos);
$valorBoleto = $obj->calcularBoleto();
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
    echo "<p> El valor del boleto es: ".$valorBoleto ."</p>";
    ?>
</body>
</html>