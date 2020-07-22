<?php

    class panier_abonnementModel
    {
        private $idPANIER_ABONNEMENT;
        private $FK_idPANIER;
        private $FK_idABONNEMENT;

        public function __construct($idPANIER_ABONNEMENT, $FK_idPANIER, $FK_idABONNEMENT)
        {
            $this->$idPANIER_ABONNEMENT = $idPANIER_ABONNEMENT;
            $this->$FK_idPANIER = $FK_idPANIER;
            $this->$FK_idABONNEMENT = $FK_idABONNEMENT;
        }

        /***
         * getters
         */
            
        public function getIdPANIER_ABONNEMENT()
        {
            return $this->$idPANIER_ABONNEMENT;
        }
        
        public function getFK_idPANIER()
        {
            return $this->$FK_idPANIER;
        }
        
        public function getFK_idABONNEMENT()
        {
            return $this->$FK_idABONNEMENT;
        }
        
        /***
         * setters
         */
         
        public function setIdPANIER_ABONNEMENT($id)
        {
            $this->$idPANIER_ABONNEMENT = $id;
        }
        
        public function setFK_idPANIER($FK_PANIER)
        {
            $this->$FK_idPANIER = $FK_PANIER;
        }
        
        public function setFK_idABONNEMENT($FK_ABONNEMENT)
        {
            $this->$FK_idABONNEMENT = $FK_ABONNEMENT;
        }
    }
