<?php

    class apero
    {
        private $idAPERO;
        private $nbrParticipentApero;
        private $nbrBoissonParticipentApero;
        private $dateApero;
        private $FK_idTYPEAPERO;

        public function __construct($idAPERO, $nbrParticipentApero, $nbrBoissonParticipentApero, $dateApero, $FK_idTYPEAPERO)
        {
            $this->$idAPERO = $idAPERO;
            $this->$nbrParticipentApero = $nbrParticipentApero;
            $this->$nbrBoissonParticipentApero = $nbrBoissonParticipentApero;
            $this->$dateApero = $dateApero;
            $this->$FK_idTYPEAPERO = $FK_idTYPEAPERO;
        }

        /***
         * getters
         */
        public function getidAPERO()
        {
            return $this->$idAPERO;
        }

        public function getnbrParticipentApero()
        {
            return $this->$nbrParticipentApero;
        }
            
        public function getnbrBoissonParticipentApero()
        {
            return $this->$nbrBoissonParticipentApero;
        }
        
        public function getdateApero()
        {
            return $this->$dateApero;
        }
        
        public function getFK_idTYPEAPERO()
        {
            return $this->$FK_idTYPEAPERO;
        }
        
        /***
         * setters
         */
        public function setidAPERO($id)
        {
            $this->$idAPERO = $id;
        }
            
        public function setnbrParticipentApero($nbrParticipent)
        {
            $this->$nbrParticipentApero = $nbrParticipent;
        }
        
        public function setnbrBoissonParticipentApero($nbrBoissonParticipent)
        {
            $this->$nbrBoissonParticipentApero = $nbrBoissonParticipent;
        }
        
        public function setdateApero($date)
        {
            $this->$dateApero = $date;
        }
        
        public function setFK_idTYPEAPERO($FK_TYPEAPERO)
        {
            $this->$FK_idTYPEAPERO = $FK_TYPEAPERO;
        }
    }
