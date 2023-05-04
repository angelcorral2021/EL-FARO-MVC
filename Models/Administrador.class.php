<?php
require_once('Persona.php');

class Administrador extends Persona
{
    private $idAdmin;
    private $rol;
    private $login;
    private $password;

    public function __construct($id, $nombre, $edad, $telefono, $correo, $idAdmin, $rol, $login, $password)
    {
        parent::__construct($id, $nombre, $edad, $telefono, $correo);
        $this->idAdmin = $idAdmin;
        $this->rol = $rol;
        $this->login = $login;
        $this->password = $password;
    }

    public function clasificar()
    {
        // Método para clasificar las noticias
    }

    public function mantenerNoticia()
    {
        // Método para mantener las noticias
    }

    // Getters y Setters para los atributos

    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    public function setIdAdmin($idAdmin)
    {
        $this->idAdmin = $idAdmin;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
