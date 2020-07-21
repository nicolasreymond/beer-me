<?php

    class commande
    {
        private $idCOMMANDE;
        private $statusCommande;
        private $dateCommande;
        private $FK_idPANIER;
        private $FK_idADRESSLIVRAISON;

        public function __construct($idCOMMANDE, $statusCommande, $dateCommande, $FK_idPANIER, $FK_idADRESSLIVRAISON)
        {
            $this->$idCOMMANDE = $idCOMMANDE;
            $this->$statusCommande = $statusCommande;
            $this->$dateCommande = $dateCommande;
            $this->$FK_idPANIER = $FK_idPANIER;
            $this->$FK_idADRESSLIVRAISON = $FK_idADRESSLIVRAISON;
        }

        /***
         * getters
         */
        public function getidCOMMANDE()
        {
            return $this->$idCOMMANDE;
        }

        public function getstatusCommande()
        {
            return $this->$statusCommande;
        }
            
        public function getdateCommande()
        {
            return $this->$dateCommande;
        }
        
        public function getFK_idPANIER()
        {
            return $this->$FK_idPANIER;
        }
        
        public function getFK_idADRESSLIVRAISON()
        {
            return $this->$FK_idADRESSLIVRAISON;
        }
        
        /***
         * setters
         */
        public function setIdCOMMANDE($id)
        {
            $this->$idCOMMANDE = $id;
        }
            
        public function setStatusCommande($status)
        {
            $this->$statusCommande = $status;
        }
        
        public function setDateCommande($date)
        {
            $this->$dateCommande = $date;
        }
        
        public function setFK_idPANIER($FK_PANIER)
        {
            $this->$FK_idPANIER = $FK_PANIER;
        }
        
        public function setFK_idADRESSLIVRAISON($FK_ADRESSLIVRAISON)
        {
            $this->$FK_idADRESSLIVRAISON = $FK_ADRESSLIVRAISON;
        }
    }
