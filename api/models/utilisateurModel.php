<?php

    class utilisateurModel
    {
        private $idUTILISATEUR;
        private $nomUTILISATEUR;
        private $prenomUTILISATEUR;
        private $dateNaissanceUTILISATEUR;
        private $emailUTILISATEUR;
        private $pwdUTILISATEUR;

        public function __construct($idUTILISATEUR, $nomUTILISATEUR, $prenomUTILISATEUR, $dateNaissanceUTILISATEUR, $emailUTILISATEUR, $pwdUTILISATEUR)
        {
            $this->$idUTILISATEUR = $idUTILISATEUR;
            $this->$nomUTILISATEUR = $nomUTILISATEUR;
            $this->$prenomUTILISATEUR = $prenomUTILISATEUR;
            $this->$dateNaissanceUTILISATEUR = $dateNaissanceUTILISATEUR;
            $this->$emailUTILISATEUR = $emailUTILISATEUR;
            $this->$pwdUTILISATEUR = $pwdUTILISATEUR;
        }

        /***
         * getters
         */
        public function getIdUTILISATEUR()
        {
            return $this->$idABONNEMENT;
        }
            
        public function getNomUTILISATEUR()
        {
            return $this->$nomAbonnement;
        }
        
        public function getPrenomUTILISATEUR()
        {
            return $this->$descriptionAbonnement;
        }
        
        public function getDateNaissanceUTILISATEUR()
        {
            return $this->$dureeAbonnement;
        }
        
        public function getEmailUTILISATEUR()
        {
            return $this->$nbrBoissonAbonnement;
        }
        
        public function getPwdUTILISATEUR()
        {
            return $this->$prixMensuelAbonnement;
        }

        /***
         * setters
         */
        public function setIdUTILISATEUR($id)
        {
            $this->$idUTILISATEUR = $id;
        }
            
        public function setNomUTILISATEUR($nom)
        {
            $this->$nomUTILISATEUR = $nom;
        }
        
        public function setPrenomUTILISATEUR($prenom)
        {
            $this->$prenomUTILISATEUR = $prenom;
        }
        
        public function setDateNaissanceUTILISATEUR($dateNaissance)
        {
            $this->$dateNaissanceUTILISATEUR = $dateNaissance;
        }
        
        public function setEmailUTILISATEUR($email)
        {
            $this->$emailUTILISATEUR = $email;
        }
        
        public function setPwdUTILISATEUR($pwd)
        {
            $this->$pwdUTILISATEUR = $pwd;
        }
    }
