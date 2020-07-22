<?php

    class adresseLivraisonModel
    {
        private $idADRESSELIVRAISON;
        private $rueLivraison;
        private $numRueLivraison;
        private $npaLivraison;
        private $villeLivraison;
        private $paysLivraison;

        public function __construct($idADRESSELIVRAISON, $rueLivraison, $numRueLivraison, $npaLivraison, $villeLivraison, $paysLivraison)
        {
            $this->$idADRESSELIVRAISON = $idADRESSELIVRAISON;
            $this->$rueLivraison = $rueLivraison;
            $this->$numRueLivraison = $numRueLivraison;
            $this->$npaLivraison = $npaLivraison;
            $this->$villeLivraison = $villeLivraison;
            $this->$paysLivraison = $paysLivraison;
        }

        /***
         * getters
         */
        public function getidADRESSELIVRAISON()
        {
            return $this->$idADRESSELIVRAISON;
        }
            
        public function getrueLivraison()
        {
            return $this->$rueLivraison;
        }
        
        public function getnumRueLivraison()
        {
            return $this->$numRueLivraison;
        }
        
        public function getnpaLivraison()
        {
            return $this->$npaLivraison;
        }
        
        public function getvilleLivraison()
        {
            return $this->$villeLivraison;
        }
        
        public function getpaysLivraison()
        {
            return $this->$paysLivraison;
        }

        /***
         * setters
         */
        public function setIdABONNEMENT($id)
        {
            $this->$idADRESSELIVRAISON = $id;
        }
            
        public function setRueLivraison($rue)
        {
            $this->$rueLivraison = $rue;
        }
        
        public function setNumRueLivraison($numRue)
        {
            $this->$numRueLivraison = $numRue;
        }
        
        public function setNpaLivraison($npa)
        {
            $this->$npaLivraison = $npa;
        }
        
        public function setVilleLivraison($ville)
        {
            $this->$villeLivraison = $ville;
        }
        
        public function setPaysLivraison($pays)
        {
            $this->$paysLivraison = $pays;
        }
    }
