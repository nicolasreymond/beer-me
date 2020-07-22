<?php

    class abonnementModel
    {
        private $idABONNEMENT;
        private $nomAbonnement;
        private $descriptionAbonnement;
        private $dureeAbonnement;
        private $nbrBoissonAbonnement;
        private $prixMensuelAbonnement;

        public function __construct($idABONNEMENT, $nomAbonnement, $descriptionAbonnement, $dureeAbonnement, $nbrBoissonAbonnement, $prixMensuelAbonnement)
        {
            $this->$idABONNEMENT = $idABONNEMENT;
            $this->$nomAbonnement = $nomAbonnement;
            $this->$descriptionAbonnement = $descriptionAbonnement;
            $this->$dureeAbonnement = $dureeAbonnement;
            $this->$nbrBoissonAbonnement = $nbrBoissonAbonnement;
            $this->$prixMensuelAbonnement = $prixMensuelAbonnement;
        }

        /***
         * getters
         */
        public function getIdABONNEMENT()
        {
            return $this->$idABONNEMENT;
        }
            
        public function getNomAbonnement()
        {
            return $this->$nomAbonnement;
        }
        
        public function getDescriptionAbonnement()
        {
            return $this->$descriptionAbonnement;
        }
        
        public function getDureeAbonnement()
        {
            return $this->$dureeAbonnement;
        }
        
        public function getNbrBoissonAbonnement()
        {
            return $this->$nbrBoissonAbonnement;
        }
        
        public function getPrixMensuelAbonnement()
        {
            return $this->$prixMensuelAbonnement;
        }

        /***
         * setters
         */
        public function setIdABONNEMENT($id)
        {
            $this->$idABONNEMENT = $id;
        }
            
        public function setNomAbonnement($nom)
        {
            $this->$nomAbonnement = $nomAbonnement;
        }
        
        public function setDescriptionAbonnement($description)
        {
            $this->$descriptionAbonnement = $description;
        }
        
        public function setDureeAbonnement($duree)
        {
            $this->$dureeAbonnement = $duree;
        }
        
        public function setNbrBoissonAbonnement($nbrBoisson)
        {
            $this->$nbrBoissonAbonnement = $nbrBoisson;
        }
        
        public function setPrixMensuelAbonnement($prixMensuel)
        {
            $this->$prixMensuelAbonnement = $prixMensuel;
        }
    }
