<?php
class Persona
{
    private $id;
    private $nombre;
    private $edad;
    private $telefono;
    private $correo;

    public function __construct($id, $nombre, $edad, $telefono, $correo)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    public function registraLogin()
    {
        // Método para registrar el inicio de sesión de la persona
    }

    // Getters y Setters para los atributos

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
}
