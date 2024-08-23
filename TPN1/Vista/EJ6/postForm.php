<?php

include_once '../../../utils/funciones.php';
//include_once '../../Control/EJ4/verificarEdad.php';
$datos = darDatosSubmitted();

$mensaje = "";

foreach( $datos as $dato => $valor ){
    if(!is_array($valor)){
        $mensaje .= "<p>".$dato .": ".$valor."</p>";
    }else{
        $mensaje .= "<p>".$dato .": ";
        foreach($valor as $deporte){
            $mensaje .= $deporte . ", ";
        }
        $mensaje .= "</p>";
    }
}

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
