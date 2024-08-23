
<?php
    class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
   

    public function __construct($datos){
    $this->nombre = $datos["nombre"];
    $this->apellido = $datos["apellido"];
    $this->edad = $datos["edad"];
    $this->direccion = $datos["direccion"];
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    
    public function esMayorEdad(){
        $retorno = false;
        if($this->getEdad() >= 18){
            $retorno = true;
        }
        return $retorno;
    }
    
}
    ?>