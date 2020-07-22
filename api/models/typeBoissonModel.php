<?php

    class typeBoissonModel
    {
        private $idTYPEBOISSON;
        private $nomTypeBoisson;

        public function __construct($idTYPEBOISSON, $nomTypeBoisson)
        {
            $this->$idTYPEBOISSON = $idTYPEBOISSON;
            $this->$nomTypeBoisson = $nomTypeBoisson;
        }

        /***
         * getters
         */
        public function getIdTYPEBOISSON()
        {
            return $this->$idTYPEBOISSON;
        }
            
        public function getNomTypeBoisson()
        {
            return $this->$nomTypeBoisson;
        }

        /***
         * setters
         */
        public function setIdTYPEBOISSON($id)
        {
            $this->$idTYPEBOISSON = $id;
        }
            
        public function setNomTypeBoisson($nom)
        {
            $this->$nomTypeBoisson = $nom;
        }
       
    }
