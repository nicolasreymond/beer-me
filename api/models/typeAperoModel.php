<?php

    class typeAperoModel
    {
        private $idTYPEAPERO;
        private $nomTypeApero;

        public function __construct($idTYPEAPERO, $nomTypeApero)
        {
            $this->$idTYPEAPERO = $idTYPEAPERO;
            $this->$nomTypeApero = $nomTypeApero;
        }

        /***
         * getters
         */
        public function getIdTYPEAPERO()
        {
            return $this->$idTYPEAPERO;
        }
            
        public function getNomTypeApero()
        {
            return $this->$nomTypeApero;
        }

        /***
         * setters
         */
        public function setIdTYPEAPERO($id)
        {
            $this->$idTYPEAPERO = $id;
        }
            
        public function setNomTypeApero($nom)
        {
            $this->$nomTypeApero = $nom;
        }
    }
