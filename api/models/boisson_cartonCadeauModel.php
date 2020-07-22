<?php
    class boisson_cartonCadeauModel
    {
        private $idBOISSON_CARTONCADEAU;
        private $FK_idBOISSON;
        private $FK_idCARTONCADEAU;

        public function __construct ($idBOISSON_CARTONCADEAU, $FK_idBOISSON, $FK_idCARTONCADEAU)
        {
            $this->$idBOISSON_CARTONCADEAU = $idBOISSON_CARTONCADEAU;
            $this->$FK_idBOISSON = $FK_idBOISSON;
            $this->$FK_idCARTONCADEAU = $FK_idCARTONCADEAU;
        }

        /***
         * getters
         */
        public function getidBOISSON_CARTONCADEAU()
        {
            return $this->$idBOISSON_CARTONCADEAU;
        }
            
        public function getFK_idBOISSON()
        {
            return $this->$FK_idBOISSON;
        }
        
        public function getFK_idCARTONCADEAU()
        {
            return $this->$FK_idCARTONCADEAU;
        }

        /***
         * setters
         */
        public function setidBOISSON_CARTONCADEAU($id)
        {
            $this->$idBOISSON_CARTONCADEAU = $id;
        }
            
        public function FK_idBOISSON($fkIdBoisson)
        {
            $this->$FK_idBOISSON = $fkIdBoisson;
        }
        
        public function setFK_idCARTONCADEAU($fkIdCarton)
        {
            $this->$FK_idCARTONCADEAU = $fkIdCarton;
        }
    }