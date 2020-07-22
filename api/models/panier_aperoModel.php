<?php

    class panier_aperoModel
    {
        private $idPANIER_APERO;
        private $FK_idPANIER;
        private $FK_idAPERO;

        public function __construct($idPANIER_APERO, $FK_idPANIER, $FK_idAPERO)
        {
            $this->$idPANIER_APERO = $idPANIER_APERO;
            $this->$FK_idPANIER = $FK_idPANIER;
            $this->$FK_idAPERO = $FK_idAPERO;
        }

        /***
         * getters
         */
            
        public function getIdPANIER_APERO()
        {
            return $this->$idPANIER_APERO;
        }
        
        public function getFK_idPANIER()
        {
            return $this->$FK_idPANIER;
        }
        
        public function getFK_idAPERO()
        {
            return $this->$FK_idAPERO;
        }
        
        /***
         * setters
         */
         
        public function setIdPANIER_APERO($id)
        {
            $this->$idPANIER_APERO = $id;
        }
        
        public function setFK_idPANIER($FK_PANIER)
        {
            $this->$FK_idPANIER = $FK_PANIER;
        }
        
        public function setFK_idAPERO($FK_APERO)
        {
            $this->$FK_idAPERO = $FK_APERO;
        }
    }
