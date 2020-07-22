<?php

    class mediaBoissonModel
    {
        private $idMEDIABOISSON;
        private $pathMediaBoisson;
        private $typeMediaBoisson;
        private $FK_idBOISSON;

        public function __construct($idMEDIABOISSON, $pathMediaBoisson, $typeMediaBoisson, $FK_idBOISSON)
        {
            $this->$idMEDIABOISSON = $idMEDIABOISSON;
            $this->$pathMediaBoisson = $pathMediaBoisson;
            $this->$typeMediaBoisson = $typeMediaBoisson;
            $this->$FK_idBOISSON = $FK_idBOISSON;
        }

        /***
         * getters
         */
        public function getIdMEDIABOISSON()
        {
            return $this->$idMEDIABOISSON;
        }
            
        public function getPathMediaBoisson()
        {
            return $this->$pathMediaBoisson;
        }
        
        public function getTypeMediaBoisson()
        {
            return $this->$typeMediaBoisson;
        }
        
        public function getFK_BOISSON()
        {
            return $this->$FK_idBOISSON;
        }
        
        /***
         * setters
         */
        public function setIdMEDIABOISSON($id)
        {
            $this->$idMEDIABOISSON = $id;
        }
            
        public function setPathMediaBoisson($path)
        {
            $this->$pathMediaBoisson = $path;
        }
        
        public function setTypeMediaBoisson($type)
        {
            $this->$typeMediaBoisson = $type;
        }
        
        public function setFK_idBOISSON($FK_BOISSON)
        {
            $this->$FK_idBOISSON = $FK_BOISSON;
        }
    }
