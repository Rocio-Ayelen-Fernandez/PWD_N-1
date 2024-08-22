<?php
include_once '../../../utils/funciones.php';
$datos = darDatosSubmitted();

$texto = '';

foreach ($datos as $categoria => $valor) {
    $texto .= '<p><strong>' . $categoria . '</strong>: ' . $valor . '</p>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/respuesta.css">
</head>
<body>
    <div id="contenedor">

    <div class="respuesta">
        <h1>La pelicula introducida es </h1>
        <?php echo $texto; ?>
    </div>
        
    </div>
    
</body>
</html>