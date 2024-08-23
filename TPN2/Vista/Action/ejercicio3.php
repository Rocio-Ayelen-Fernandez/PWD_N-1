<?php
include_once '../../../utils/funciones.php';
include_once '../../Control/Password.php';
$datos = darDatosSubmitted();

$objPass = new Password();

$valor = $objPass->verificar($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div id="contenedor">
        <?php if ($valor) {
            echo '<p>Datos ingresados correctamente<br>Bienvenido!</p>';
        } else {
            echo '<p>No se encontraron los datos ingresados, intente de nuevo</p>';
        } ?>
        <button><a href="../ejercicio3.php">Volver</a></button>
    </div>
    
</body>
</html>