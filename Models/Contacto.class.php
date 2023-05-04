<?php
class Contacto extends Persona
{
    private $mensaje;
    private $fechaDeEnvio;

    public function __construct($id, $nombre, $edad, $telefono, $correo, $mensaje, $fechaDeEnvio)
    {
        parent::__construct($id, $nombre, $edad, $telefono, $correo);
        $this->mensaje = $mensaje;
        $this->fechaDeEnvio = $fechaDeEnvio;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    public function getFechaDeEnvio()
    {
        return $this->fechaDeEnvio;
    }

    public function setFechaDeEnvio($fechaDeEnvio)
    {
        $this->fechaDeEnvio = $fechaDeEnvio;
    }

    public function estadoEnviado()
    {
        // Código para verificar si el mensaje ha sido enviado
    }
}
