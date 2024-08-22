<?php
class Edad
{
    public function verificarEdad($edad)
    {
        if($edad<18){
            $mensaje = "menor";
        }else{  
            $mensaje = "mayor";
        }
        return $mensaje;
    }
}

?>
