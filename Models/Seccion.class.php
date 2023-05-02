 <?php


    class Seccion
    {
        private $id;
        private $nombre;
        private $descripcion;
        private $fechaCreacion;
        private $idAdmin;

        public function __construct($id, $nombre, $descripcion, $fechaCreacion, $idAdmin)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->fechaCreacion = $fechaCreacion;
            $this->idAdmin = $idAdmin;
        }

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

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function getFechaCreacion()
        {
            return $this->fechaCreacion;
        }

        public function setFechaCreacion($fechaCreacion)
        {
            $this->fechaCreacion = $fechaCreacion;
        }

        public function getIdAdmin()
        {
            return $this->idAdmin;
        }

        public function setIdAdmin($idAdmin)
        {
            $this->idAdmin = $idAdmin;
        }
    }
