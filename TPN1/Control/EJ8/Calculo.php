<?php

class Calculo{
    function darPrecio($datos){
        $edad = $datos['edad'];
        $estudiante = $datos['estudiante'];
        $resultado = 0;
        if(is_numeric($edad)){
            if($edad < 12){
                $resultado = 160;
            }else{
                if($estudiante == "si"){
                    $resultado = 180;
                }else{
                    $resultado = 300;
                }
            }
        }else{
            $resultado = -1;
        }
        return $resultado;
    }
}


?>