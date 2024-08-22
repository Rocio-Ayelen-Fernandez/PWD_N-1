<?php
class Password
{
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = [
            ['user' => 'Rocio', 'password' => '123'],
            ['user' => 'Ayelen', 'password' => '1234'],
        ];
    }

    public function verificar($datos)
    {
        $result = false;
        foreach ($this->usuarios as $usuario) {
            if (
                $usuario['user'] === $datos['user'] &&
                $usuario['password'] === $datos['password']
            ) {
                return true;
            }
        }
        return $result;
    }
}
?>
