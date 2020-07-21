<?php

    class brasserie
    {
        private $idBRASSERIE;
        private $nomBrasserie;
        private $descriptionBrasserie;
        private $rueBrasserie;
        private $numRueBrasserie;
        private $villeBrasserie;
        private $npaBrasserie;
        private $paysBrasserie;
        private $autorisationBrasserie;

        public function __construct($idBRASSERIE, $nomBrasserie, $descriptionBrasserie, $rueBrasserie, $numRueBrasserie, $villeBrasserie, $npaBrasserie, $paysBrasserie, $autorisationBrasserie)
        {
            $this->$idBRASSERIE = $idBRASSERIE;
            $this->$nomBrasserie = $nomBrasserie;
            $this->$descriptionBrasserie = $descriptionBrasserie;
            $this->$rueBrasserie = $rueBrasserie;
            $this->$numRueBrasserie = $numRueBrasserie;
            $this->$villeBrasserie = $villeBrasserie;
            $this->$npaBrasserie = $npaBrasserie;
            $this->$paysBrasserie = $paysBrasserie;
            $this->$autorisationBrasserie = $autorisationBrasserie;
        }

        /***
         * getters
         */
        public function getIdBRASSERIE()
        {
            return $this->$idBRASSERIE;
        }
            
        public function getNomBrasserie()
        {
            return $this->$nomBrasserie;
        }
        
        public function getDescriptionBrasserie()
        {
            return $this->$descriptionBrasserie;
        }
        
        public function getRueBrasserie()
        {
            return $this->$rueBrasserie;
        }
        
        public function getNumRueBrasserie()
        {
            return $this->$numRueBrasserie;
        }
        
        public function getVilleBrasserie()
        {
            return $this->$villeBrasserie;
        }
        
        public function getNpaBrasserie()
        {
            return $this->$npaBrasserie;
        }
        
        public function getPaysBrasserie()
        {
            return $this->$paysBrasserie;
        }
        
        public function getAutorisationBrasserie()
        {
            return $this->$autorisationBrasserie;
        }

        /***
         * setters
         */
        public function setIdBRASSERIE($id)
        {
            $this->$idBRASSERIE = $id;
        }
            
        public function setNomBrasserie($nom)
        {
            $this->$nomBrasserie = $nom;
        }
        
        public function setDescriptionBrasserie($description)
        {
            $this->$descriptionBrasserie = $description;
        }
        
        public function setRueBrasserie($rue)
        {
            $this->$rueBrasserie = $rue;
        }
        
        public function setNumRueBrasserie($numRue)
        {
            $this->$numRueBrasserie = $numRue;
        }
        
        public function setVilleBrasserie($ville)
        {
            $this->$villeBrasserie = $ville;
        }
        
        public function setNpaBrasserie($npa)
        {
            $this->$npaBrasserie = $npa;
        }
        
        public function setPaysBrasserie($pays)
        {
            $this->$paysBrasserie = $pays;
        }
        
        public function setAutorisationBrasserie($autorisation)
        {
            $this->$autorisationBrasserie = $autorisation;
        }
    }
