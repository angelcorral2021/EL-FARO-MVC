<?php

class Suscriptor {
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $contrasena;

    public function __construct($id, $nombre, $apellido, $correo, $contrasena) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }
}
