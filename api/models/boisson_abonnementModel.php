<?php

    class boisson_abonnementModel
    {
        private $idBOISSON_ABONNEMENT;
        private $FK_idBOISSON;
        private $FK_idABONNEMENT;

        public function __construct($idBOISSON_ABONNEMENT, $FK_idBOISSON, $FK_idABONNEMENT)
        {
            $this->$idBOISSON_ABONNEMENT = $idBOISSON_ABONNEMENT;
            $this->$FK_idBOISSON = $FK_idBOISSON;
            $this->$FK_idABONNEMENT = $FK_idABONNEMENT;
        }

        /***
         * getters
         */
            
        public function getidBOISSON_ABONNEMENT()
        {
            return $this->$idBOISSON_ABONNEMENT;
        }
        
        public function getFK_idBOISSON()
        {
            return $this->$FK_idBOISSON;
        }
        
        public function getFK_idABONNEMENT()
        {
            return $this->$FK_idABONNEMENT;
        }
        
        /***
         * setters
         */
         
        public function setidBOISSON_ABONNEMENT($id)
        {
            $this->$idBOISSON_ABONNEMENT = $id;
        }
        
        public function setFK_idBOISSON($FK_BOISSON)
        {
            $this->$FK_idBOISSON = $FK_BOISSON;
        }
        
        public function setFK_idABONNEMENT($FK_ABONNEMENT)
        {
            $this->$FK_idABONNEMENT = $FK_ABONNEMENT;
        }
    }
