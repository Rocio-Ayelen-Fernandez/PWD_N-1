<?php
include_once '../../../utils/funciones.php';
include_once '../../control/EJ2/Archivo.php';

$datos = darDatosSubmitted();

$objArchivo = new Archivo();
$respuesta = $objArchivo->subirArchivo($datos);

$mensaje = '';
$archivoPath = $objArchivo->getDir() . $datos['miArchivo']['name'];

if ($respuesta == 0) {
    $mensaje = '<p>No se pudo cargar el archivo</p>';
} elseif ($respuesta == 1) {
    $mensaje .=
        '<p>El archivo ' .
        $datos['miArchivo']['name'] .
        ' se ha copiado con éxito <br>';
    // $mensaje .=
    //     '<a href="' .
    //     $objArchivo->getDir() .
    //     $datos['miArchivo']['name'] .
    //     '">Descargar archivo</a></p>';
    $mensaje .= '<pre>' . file_get_contents($archivoPath) . '</pre>';
} elseif ($respuesta == -2) {
    $mensaje =
        '<p>Tipo de archivo no permitido. Solo se permiten archivos .txt.</p>';
} elseif ($respuesta == -3) {
    $mensaje = '<p>El archivo excede el tamaño máximo permitido de 2MB.</p>';
} else {
    $mensaje =
        '<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal</p>';
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $mensaje; ?>
</body>
</html>