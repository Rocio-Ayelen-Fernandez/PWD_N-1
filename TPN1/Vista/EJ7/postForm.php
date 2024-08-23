<?php

include_once "../../Control/EJ7/Calculo.php";
include_once "../../../utils/funciones.php";

$datos = darDatosSubmitted();

$objCalculo = new Calculo();

$respuesta=$objCalculo->devolverCalculo($datos);


    switch($datos["tipo"]){
        case"suma":
            $mensaje = $datos["op1"]." + ".$datos["op2"]." = ".$respuesta;
            break;
        case"resta":
            $mensaje = $datos["op1"]." - ".$datos["op2"]." = ".$respuesta;
            break;
        case "multiplicacion":
            $mensaje = $datos["op1"]." * ".$datos["op2"]." = ".$respuesta;
            break;
        case "error":
            $mensaje = "Error, no se puede dividir por 0";
            break;
        case "division":
            if($respuesta == "error"){
                $mensaje = "Error, no se puede dividir por 0";

            }else{
                $mensaje = $datos["op1"]." / ".$datos["op2"]." = ".$respuesta;
            }
            break;
        
    }
    


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