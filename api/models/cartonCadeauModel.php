<?php

    class cartonCadeauModel
    {
        private $idCARTONCADEAU;
        private $textCartonCadeau;

        public function __construct($idCARTONCADEAU, $textCartonCadeau)
        {
            $this->idCARTONCADEAU = $idCARTONCADEAU;
            $this->textCartonCadeau = $textCartonCadeau;
        }

        /***
         * getters
         */
        public function getIdCARTONCADEAU()
        {
            return $this->$idCARTONCADEAU;
        }
            
        public function getTextCartonCadeau()
        {
            return $this->$textCartonCadeau;
        }

        /***
         * setters
         */
        public function setIdCARTONCADEAU($id)
        {
            $this->$idCARTONCADEAU = $id;
        }
            
        public function setTextCartonCadeau($text)
        {
            $this->$textCartonCadeau = $text;
        }
    }
