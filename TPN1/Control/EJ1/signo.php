<?php
// TP1/control/vernumero.php

class Numero
{
    public function devolverSigno($info)
    {
        if ($info['numero'] == 0) {
            $mensaje = 'cero';
        } elseif ($info['numero'] > 0) {
            $mensaje = 'positivo';
        } elseif ($info['numero'] < 0) {
            $mensaje = 'negativo';
        }
        return $mensaje;
    }
}

?>
