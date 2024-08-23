<?php
class Password
{
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = [
            ["user" => "admin", "password" => "12345678"],
            ["user" => "user", "password" => "11111111"]
        ];
    }

    public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function setUsuario($usuarios){
        $this->usuarios = $usuarios;
    }

    public function verificar($datos)
    {
        $result = false;
        foreach ($this->getUsuarios() as $usuario) {
            if (
                $usuario['user'] === $datos['user'] &&
                $usuario['password'] === $datos['password']
            ) {
                $result = true;
            }
        }
        return $result;
    }
}
?>
