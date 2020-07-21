<?php

    class boisson
    {
        private $idBOISSON;
        private $nomBoisson;
        private $descriptionBoisson;
        private $pourcentageAlcoolBoisson;
        private $stockBoisson;
        private $prixBoisson;
        private $FK_idBRASSERIE;
        private $FK_idTYPEBOISSON;

        public function __construct($idBOISSON, $nomBoisson, $descriptionBoisson, $pourcentageAlcoolBoisson, $stockBoisson, $prixBoisson, $FK_idBRASSERIE, $FK_idTYPEBOISSON)
        {
            $this->$idBOISSON = $idBOISSON;
            $this->$nomBoisson = $nomBoisson;
            $this->$descriptionBoisson = $descriptionBoisson;
            $this->$pourcentageAlcoolBoisson = $pourcentageAlcoolBoisson;
            $this->$stockBoisson = $stockBoisson;
            $this->$prixBoisson = $prixBoisson;
            $this->$FK_idBRASSERIE = $FK_idBRASSERIE;
            $this->$FK_idTYPEBOISSON = $FK_idTYPEBOISSON;
        }

        /***
         * getters
         */
        public function getidBOISSON()
        {
            return $this->$idBOISSON;
        }
            
        public function getnomBoisson()
        {
            return $this->$nomBoisson;
        }
        
        public function getdescriptionBoisson()
        {
            return $this->$descriptionBoisson;
        }
        
        public function getpourcentageAlcoolBoisson()
        {
            return $this->$pourcentageAlcoolBoisson;
        }
        
        public function getstockBoisson()
        {
            return $this->$stockBoisson;
        }
        
        public function getprixBoisson()
        {
            return $this->$prixBoisson;
        }
        
        public function getFK_idBRASSERIE()
        {
            return $this->$FK_idBRASSERIE;
        }
        
        public function getFK_idTYPEBOISSON()
        {
            return $this->$FK_idTYPEBOISSON;
        }

        /***
         * setters
         */
        public function setidBOISSON($id)
        {
            $this->$idBOISSON = $id;
        }
            
        public function setnomBoisson($nom)
        {
            $this->$nomBoisson = $nom;
        }
        
        public function setdescriptionBoisson($description)
        {
            $this->$descriptionBoisson = $description;
        }
        
        public function setpourcentageAlcoolBoisson($pourcentageAlcool)
        {
            $this->$pourcentageAlcoolBoisson = $pourcentageAlcool;
        }
        
        public function setstockBoisson($stock)
        {
            $this->$stockBoisson = $stock;
        }
        
        public function setprixBoisson($prix)
        {
            $this->$prixBoisson = $prix;
        }
        
        public function setFK_idBRASSERIE($FK_BRASSERIE)
        {
            $this->$FK_idBRASSERIE = $FK_BRASSERIE;
        }
        
        public function setFK_idTYPEBOISSON($FK_TYPEBOISSON)
        {
            $this->$FK_idTYPEBOISSON = $FK_TYPEBOISSON;
        }
    }
