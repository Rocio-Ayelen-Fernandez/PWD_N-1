<?php


class Calculo{


    function devolverCalculo($datos){
        $op1 = $datos['op1'];
        $op2 = $datos['op2'];
        $tipo = $datos['tipo'];
        $resultado = 0;
        if(is_numeric($op1) && is_numeric($op2)){
            switch ($tipo) {
                case 'suma':
                    $resultado = $op1 + $op2;
                    break;
                case 'resta':
                    $resultado = $op1 - $op2;
                    break;
                case 'multiplicacion':
                    $resultado = $op1 * $op2;
                    break;
                case 'division':
                    if($op2 == 0){
                        $resultado ="error";
    
                    }else{
                        $resultado = $op1 / $op2; 
                    }
                    break;
                default:
                    $resultado = "error";
                    break;
            }  
        }else{
            $resultado = -1;
        }
        
        return $resultado;
    }

}

?>