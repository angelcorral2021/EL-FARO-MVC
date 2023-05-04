<?php
class Articulo
{
    private $titulo;
    private $categoria;
    private $contenido;
    private $fecha;
    private $autor;
    private $contador;
    private $imagen;
    private $video;

    public function __construct($titulo, $categoria, $contenido, $fecha, $autor, $contador, $imagen, $video)
    {
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        $this->autor = $autor;
        $this->contador = $contador;
        $this->imagen = $imagen;
        $this->video = $video;
    }

    public function estadoPublicado()
    {
        // Método para verificar si el artículo ha sido publicado
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

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getContador()
    {
        return $this->contador;
    }

    public function setContador($contador)
    {
        $this->contador = $contador;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function setVideo($video)
    {
        $this->video = $video;
    }
}
