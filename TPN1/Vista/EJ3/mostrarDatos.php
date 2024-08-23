<?php

include_once '../../utils/funciones.php';
$datos = darDatosSubmitted();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlazar tu archivo CSS -->
</head>
<body>
    <?php echo '<p>Hola, yo soy ' .
        $datos['nombre'] .
        ' ' .
        $datos['apellido'] .
        ', tengo ' .
        $datos['edad'] .
        ' años y vivo en ' .
        $datos['direccion'] .
        '.</p>'; ?>
    <a href="formDatos.php">Volver</a>
</body>
</html>
