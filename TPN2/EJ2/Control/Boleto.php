
<?php

class Boleto extends Persona {
private $estudia;

    public function __construct($datos){
        parent::__construct($datos);
        $this->estudia = $datos['estudiante'] == "si" ? true : false;
    }
    public function getValorEstudia(){
        return $this->estudia;
    }

    public function setValorEstudia(){
        return $this->estudia;
    }
    public function calcularBoleto(){
        $costoEntrada = 0;
        $estudiante = $this->getValorEstudia();
        if($this->getEdad() >=12 && $estudiante){
            $costoEntrada = 180;
        }else if($this->getEdad()< 18 || $estudiante){
            $costoEntrada = 160;
        }else{
            $costoEntrada = 300;
        }
        return $costoEntrada;
    }

    

}
