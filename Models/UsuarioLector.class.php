<?php
require_once('Persona.php');

class UsuarioLector extends Persona
{
    private $contrasena;
    private $estadoDeSeccion;
    private $articulosPublicados;
    private $avisosPublicados;

    public function __construct($id, $nombre, $edad, $telefono, $correo, $contrasena, $estadoDeSeccion, $articulosPublicados, $avisosPublicados)
    {
        parent::__construct($id, $nombre, $edad, $telefono, $correo);
        $this->contrasena = $contrasena;
        $this->estadoDeSeccion = $estadoDeSeccion;
        $this->articulosPublicados = $articulosPublicados;
        $this->avisosPublicados = $avisosPublicados;
    }

    public function login()
    {
        // Método para iniciar sesión
    }

    public function actualizarDatos($datos)
    {
        // Método para actualizar los datos de usuario/lector
    }

    public function recuperarContrasena($correo)
    {
        // Método para recuperar la contraseña
    }

    public function publicar()
    {
        // Método para publicar un artículo o aviso
    }

    // Getters y Setters para los atributos

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function getEstadoDeSeccion()
    {
        return $this->estadoDeSeccion;
    }

    public function setEstadoDeSeccion($estadoDeSeccion)
    {
        $this->estadoDeSeccion = $estadoDeSeccion;
    }

    public function getArticulosPublicados()
    {
        return $this->articulosPublicados;
    }

    public function setArticulosPublicados($articulosPublicados)
    {
        $this->articulosPublicados = $articulosPublicados;
    }

    public function getAvisosPublicados()
    {
        return $this->avisosPublicados;
    }

    public function setAvisosPublicados($avisosPublicados)
    {
        $this->avisosPublicados = $avisosPublicados;
    }
}
