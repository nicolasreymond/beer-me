<?php

    class panier_boissonModel
    {
        private $idPANIER_BOISSON;
        private $FK_idPANIER;
        private $FK_idBOISSON;

        public function __construct($idPANIER_BOISSON, $FK_idPANIER, $FK_idBOISSON)
        {
            $this->$idPANIER_BOISSON = $idPANIER_BOISSON;
            $this->$FK_idPANIER = $FK_idPANIER;
            $this->$FK_idBOISSON = $FK_idBOISSON;
        }

        /***
         * getters
         */
            
        public function getIdPANIER_BOISSON()
        {
            return $this->$idPANIER_BOISSON;
        }
        
        public function getFK_idPANIER()
        {
            return $this->$FK_idPANIER;
        }
        
        public function getFK_idBOISSON()
        {
            return $this->$FK_idBOISSON;
        }
        
        /***
         * setters
         */
         
        public function setIdPANIER_BOISSON($id)
        {
            $this->$idPANIER_BOISSON = $id;
        }
        
        public function setFK_idPANIER($FK_PANIER)
        {
            $this->$FK_idPANIER = $FK_PANIER;
        }
        
        public function setFK_idBOISSON($FK_BOISSON)
        {
            $this->$FK_idBOISSON = $FK_BOISSON;
        }
    }
