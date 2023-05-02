<?php



class Noticia {
    private $id;
    private $titulo;
    private $contenido;
    private $fechaPublicacion;
    private $idPeriodista;
    private $idSeccion;

    public function __construct($id, $titulo, $contenido, $fechaPublicacion, $idPeriodista, $idSeccion) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->idPeriodista = $idPeriodista;
        $this->idSeccion = $idSeccion;
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

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getIdPeriodista() {
        return $this->idPeriodista;
    }

    public function setIdPeriodista($idPeriodista) {
        $this->idPeriodista = $idPeriodista;
    }

    public function getIdSeccion() {
        return $this->idSeccion;
    }

    public function setIdSeccion($idSeccion) {
        $this->idSeccion = $idSeccion;
    }
}
