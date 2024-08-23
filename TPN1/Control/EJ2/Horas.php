<?php

class Horas{
    
    function darHoras($datos){
        $horas = $datos["horas"];
        $totalHoras = array_sum($horas);

        return $totalHoras;
    }

}
?>
