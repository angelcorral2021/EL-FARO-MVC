<?php
class Avisos
{
    private $titulo;
    private $contenido;
    private $fecha;
    private $contacto;

    public function __construct($titulo, $contenido, $fecha, $contacto)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        $this->contacto = $contacto;
    }

    public function estado()
    {
        // Método para verificar el estado del aviso
    }

    // Getters y Setters para los atributos

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getContacto()
    {
        return $this->contacto;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }
}
