<?php

    class utilisateur_brasserieModel
    {
        private $idUTILISATEUR_BRASSERIE;
        private $FK_idUTILISATEUR;
        private $FK_idBRASSERIE;
        private $dateCreation;

        public function __construct($idUTILISATEUR_BRASSERIE, $FK_idUTILISATEUR, $FK_idBRASSERIE, $dateCreation)
        {
            $this->$idUTILISATEUR_BRASSERIE = $idUTILISATEUR_BRASSERIE;
            $this->$FK_idUTILISATEUR = $FK_idUTILISATEUR;
            $this->$FK_idBRASSERIE = $FK_idBRASSERIE;
            $this->$dateCreation = $dateCreation;
        }

        /***
         * getters
         */
        public function getidUTILISATEUR_BRASSERIE()
        {
            return $this->$idUTILISATEUR_BRASSERIE;
        }
            
        public function getFK_idUTILISATEUR()
        {
            return $this->$FK_idUTILISATEUR;
        }
        
        public function getFK_idBRASSERIE()
        {
            return $this->$FK_idBRASSERIE;
        }
        
        public function getDateCreation()
        {
            return $this->$dateCreation;
        }
        
        /***
         * setters
         */
        public function setidUTILISATEUR_BRASSERIE($id)
        {
            $this->$idUTILISATEUR_BRASSERIE = $id;
        }
            
        public function setFK_idUTILISATEUR($FK_UTILISATEUR)
        {
            $this->$FK_idUTILISATEUR = $FK_UTILISATEUR;
        }
        
        public function setFK_idBRASSERIE($FK_BRASSERIE)
        {
            $this->$FK_idBRASSERIE = $FK_BRASSERIE;
        }
        
        public function setDateCreation($date)
        {
            $this->$dateCreation = $date;
        }
    }
