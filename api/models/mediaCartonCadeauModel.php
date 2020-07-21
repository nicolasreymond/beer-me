<?php

    class mediaCartonCadeau
    {
        private $idMEDIACARTONCADEAU;
        private $pathMediaCartonCadeau;
        private $typeMediaCartonCadeau;
        private $FK_idCARTONCADEAU;

        public function __construct($idMEDIACARTONCADEAU, $pathMediaCartonCadeau, $typeMediaCartonCadeau, $FK_idCARTONCADEAU)
        {
            $this->$idMEDIACARTONCADEAU = $idMEDIACARTONCADEAU;
            $this->$pathMediaCartonCadeau = $pathMediaCartonCadeau;
            $this->$typeMediaCartonCadeau = $typeMediaCartonCadeau;
            $this->$FK_idCARTONCADEAU = $FK_idCARTONCADEAU;
        }

        /***
         * getters
         */
        public function getIdMEDIACARTONCADEAU()
        {
            return $this->$idMEDIACARTONCADEAU;
        }
            
        public function getPathMediaCartonCadeau()
        {
            return $this->$pathMediaCartonCadeau;
        }
        
        public function getTypeMediaCartonCadeau()
        {
            return $this->$typeMediaCartonCadeau;
        }
        
        public function getFK_idCARTONCADEAU()
        {
            return $this->$FK_idCARTONCADEAU;
        }
        
        /***
         * setters
         */
        public function setIdMEDIACARTONCADEAU($id)
        {
            $this->$idMEDIACARTONCADEAU = $id;
        }
            
        public function setPathMediaCartonCadeau($path)
        {
            $this->$pathMediaCartonCadeau = $path;
        }
        
        public function setTypeMediaCartonCadeau($type)
        {
            $this->$typeMediaCartonCadeau = $type;
        }
        
        public function setFK_idCARTONCADEAU($FK_CARTONCADEAU)
        {
            $this->$FK_idCARTONCADEAU = $FK_CARTONCADEAU;
        }
    }
