<?php


class Anuncio {
    private $id;
    private $titulo;
    private $contenido;
    private $idAdministrador;

    public function __construct($id, $titulo, $contenido, $idAdministrador) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->idAdministrador = $idAdministrador;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getContenido() {
        return $this->contenido;
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function getIdAdministrador() {
        return $this->idAdministrador;
    }

    public function setIdAdministrador($idAdministrador) {
        $this->idAdministrador = $idAdministrador;
    }
}
