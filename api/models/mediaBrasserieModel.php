<?php

    class mediaBrasserieModel
    {
        private $idMEDIABRASSERIE;
        private $pathMediaBrasserie;
        private $typeMediaBrasserie;
        private $FK_idBRASSERIE;

        public function __construct($idMEDIABRASSERIE, $pathMediaBrasserie, $typeMediaBrasserie, $FK_idBRASSERIE)
        {
            $this->$idMEDIABRASSERIE = $idMEDIABRASSERIE;
            $this->$pathMediaBrasserie = $pathMediaBrasserie;
            $this->$typeMediaBrasserie = $typeMediaBrasserie;
            $this->$FK_idBRASSERIE = $FK_idBRASSERIE;
        }

        /***
         * getters
         */
        public function getIdMEDIABRASSERIE()
        {
            return $this->$idMEDIABRASSERIE;
        }
            
        public function getPathMediaBrasserie()
        {
            return $this->$pathMediaBrasserie;
        }
        
        public function getTypeMediaBrasserie()
        {
            return $this->$typeMediaBrasserie;
        }
        
        public function getFK_idBRASSERIE()
        {
            return $this->$FK_idBRASSERIE;
        }
        
        /***
         * setters
         */
        public function setIdMEDIABRASSERIE($id)
        {
            $this->$idMEDIABRASSERIE = $id;
        }
            
        public function setPathMediaBrasserie($path)
        {
            $this->$pathMediaBrasserie = $path;
        }
        
        public function setTypeMediaBrasserie($type)
        {
            $this->$typeMediaBrasserie = $type;
        }
        
        public function setFK_idBRASSERIE($FK_BRASSERIE)
        {
            $this->$FK_idBRASSERIE = $FK_BRASSERIE;
        }
    }
