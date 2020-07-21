<?php

    class abonnement
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
            
        public function getnomAbonnement()
        {
            return $this->$nomAbonnement;
        }
        
        public function getdescriptionAbonnement()
        {
            return $this->$descriptionAbonnement;
        }
        
        public function getdureeAbonnement()
        {
            return $this->$dureeAbonnement;
        }
        
        public function getnbrBoissonAbonnement()
        {
            return $this->$nbrBoissonAbonnement;
        }
        
        public function getprixMensuelAbonnement()
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
            
        public function setnomAbonnement($nom)
        {
            $this->$nomAbonnement = $nomAbonnement;
        }
        
        public function setdescriptionAbonnement($description)
        {
            $this->$descriptionAbonnement = $description;
        }
        
        public function setdureeAbonnement($duree)
        {
            $this->$dureeAbonnement = $duree;
        }
        
        public function setnbrBoissonAbonnement($nbrBoisson)
        {
            $this->$nbrBoissonAbonnement = $nbrBoisson;
        }
        
        public function setprixMensuelAbonnement($prixMensuel)
        {
            $this->$prixMensuelAbonnement = $prixMensuel;
        }
    }
