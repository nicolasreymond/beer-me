<?php

    class cartonCadeau_panierModel
    {
        private $idCARTONCADEAU_PANIER;
        private $FK_idPANIER;
        private $FK_idCARTONCADEAU;

        public function __construct($idCARTONCADEAU_PANIER, $FK_idPANIER, $FK_idCARTONCADEAU)
        {
            $this->$idCARTONCADEAU_PANIER = $idCARTONCADEAU_PANIER;
            $this->$FK_idPANIER = $FK_idPANIER;
            $this->$FK_idCARTONCADEAU = $FK_idCARTONCADEAU;
        }

        /***
         * getters
         */
        public function getidCARTONCADEAU_PANIER()
        {
            return $this->$idCARTONCADEAU_PANIER;
        }
        
        public function getFK_idPANIER()
        {
            return $this->$FK_idPANIER;
        }
        
        public function getFK_idCARTONCADEAU()
        {
            return $this->$FK_idCARTONCADEAU;
        }
        
        /***
         * setters
         */
        public function setIdCARTONCADEAU_PANIER($id)
        {
            $this->$idCARTONCADEAU_PANIER = $idCARTONCADEAU_PANIER;
        }
        
        public function setFK_idPANIER($FK_PANIER)
        {
            $this->$FK_idPANIER = $FK_PANIER;
        }
        
        public function setFK_idCARTONCADEAU($FK_CARTONCADEAU)
        {
            $this->$FK_idCARTONCADEAU = $FK_CARTONCADEAU;
        }
    }
