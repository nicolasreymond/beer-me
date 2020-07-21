<?php

    class panier
    {
        private $idPANIER;
        private $FK_idUTILISATEUR;

        public function __construct($idTYPEAPERO, $nomTypeApero)
        {
            $this->idPANIER = $idPANIER;
            $this->FK_idUTILISATEUR = $FK_idUTILISATEUR;
        }

        /***
         * getters
         */
        public function getIdPANIER()
        {
            return $this->$idPANIER;
        }
            
        public function getFK_idUTILISATEUR()
        {
            return $this->$FK_idUTILISATEUR;
        }

        /***
         * setters
         */
        public function setIdPANIER($id)
        {
            $this->$idPANIER = $id;
        }
            
        public function setFK_idUTILISATEUR($FK_UTILISATEUR)
        {
            $this->$FK_idUTILISATEUR = $FK_UTILISATEUR;
        }
    }
