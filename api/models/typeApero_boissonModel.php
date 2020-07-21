<?php

    class typeApero_boisson
    {
        private $idTYPEAPERO_BOISSON;
        private $FK_idTYPEAPERO;
        private $FK_idBOISSON;
        private $quantiteBoisson;

        public function __construct($idTYPEAPERO_BOISSON, $FK_idTYPEAPERO, $FK_idBOISSON, $quantiteBoisson)
        {
            $this->$idUTILISATEUR_BRASSERIE = $idTYPEAPERO_BOISSON;
            $this->$FK_idUTILISATEUR = $FK_idTYPEAPERO;
            $this->$FK_idBRASSERIE = $FK_idBOISSON;
            $this->$dateCreation = $quantiteBoisson;
        }

        /***
         * getters
         */
        public function getidTYPEAPERO_BOISSON()
        {
            return $this->$idTYPEAPERO_BOISSON;
        }
            
        public function getFK_idTYPEAPERO()
        {
            return $this->$FK_idTYPEAPERO;
        }
        
        public function getFK_idBOISSON()
        {
            return $this->$FK_idBOISSON;
        }
        
        public function getquantiteBoisson()
        {
            return $this->$quantiteBoisson;
        }
        
        /***
         * setters
         */
        public function setIdTYPEAPERO_BOISSON($id)
        {
            $this->$idTYPEAPERO_BOISSON = $id;
        }
            
        public function setFK_idTYPEAPERO($FK_TYPEAPERO)
        {
            $this->$FK_idTYPEAPERO = $FK_TYPEAPERO;
        }
        
        public function setFK_idBOISSON($FK_BOISSON)
        {
            $this->$FK_idBOISSON = $FK_BOISSON;
        }
        
        public function setQuantiteBoisson($quantite)
        {
            $this->$quantiteBoisson = $quantite;
        }
    }
