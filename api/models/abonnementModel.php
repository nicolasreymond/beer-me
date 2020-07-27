<?php

    class abonnementModel
    {
        private $idABONNEMENT
        private $nomAbonnement;
        private $descriptionAbonnement;
        private $dureeAbonnement;
        private $nbrBoissonAbonnement;
        private $prixMensuelAbonnement;

        public function __construct($nomAbonnement, $descriptionAbonnement, $dureeAbonnement, $nbrBoissonAbonnement, $prixMensuelAbonnement)
        {
            $this->$nomAbonnement = $nomAbonnement;
            $this->$descriptionAbonnement = $descriptionAbonnement;
            $this->$dureeAbonnement = $dureeAbonnement;
            $this->$nbrBoissonAbonnement = $nbrBoissonAbonnement;
            $this->$prixMensuelAbonnement = $prixMensuelAbonnement;

          try {
            $sql = "INSERT INTO ABONNEMENT (nomAbonnement, 
                descriptionAbonnement, 
                dureeAbonnement, 
                nbrBoissonAbonnement, 
                prixMensuelAbonnement)
                    VALUE (:nom, 
                :desc, 
                :duree, 
                :nbrBoisson, 
                :prixMensuel);";
            $stmt = EDatabase::prepare($sql);
            $stmt->bindParam(':nom', $nomAbonnement, PDO::PARAM_STR);
            $stmt->bindParam(':desc', $descriptionAbonnement, PDO::PARAM_STR);
            $stmt->bindParam(':duree', $dureeAbonnement, PDO::PARAM_INT);
            $stmt->bindParam(':nbrBoisson', $nbrBoissonAbonnement, PDO::PARAM_INT);
            $stmt->bindParam(':prixMensuel', $prixMensuelAbonnement, PDO::PARAM_INT);
            $stmt->execute();

            $this->idABONNEMENT = EDatabase::lastInsertId();
            return true;
          } catch (Exception $e) {
            EDatabase::rollBack();
            echo "erreur de création d'abonnement : " . $e;
            return false;
          }
        }

      public function getAllAbonnements()
      {
        $abonnements = array();

        try {
          $sql = "SELECT * FROM ABONNEMENT;";
          $stmt = EDatabase::prepare($sql);
          $results = $stmt->fetchAll();
        } catch (Exception $e) {
          EDatabase::rollBack();
          echo "erreur lors du get all abonnements : " . $e;
          return false;
        }

        return $abonnements;
      }

      public function getAbonnementById ($id){
        try{
          $sql = "SELECT * FROM ABONNEMENT
                WHERE idABONNEMENT = :id;";
          $stmt = EDatabase::prepare($sql);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $result = $stmt->fetch(PDO::FETCH_OBJ);
        }catch (Exception $e){
          EDatabase::rollBack();
          echo "problème sur le get d'un abo par l'id : " . $e;
          return false;
        }
      }

      public function delAbonnement ($id){
        try{
          $sql = "DELETE FROM ABONNEMENT WHERE id = :id;";
          $stmt = EDatabase::prepare($sql);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }catch (Exception $e){
          EDatabase::rollBack();
          echo "problème sur le delete d'un abo par l'id : " . $e;
          return false;
        }

        return true;

      }

      public function updateAbonnement($id, $nom, $description, $dureeabonnement, $nbrBoisson, $prixMensuel){
        try {
          $sql = "UPDATE ABONNEMENT set nomAbonnement = :nom, 
            set descriptionAbonnement = :desc, 
            set dureeAbonnement = :duree, 
            set nbrBoissonAbonnement = :nbrBoisson, 
            set prixMensuelAbonnement = :prixMensuel)
                WHERE idABONNEMENT = :id;";
          $stmt = EDatabase::prepare($sql);
          $stmt->bindParam(':id', $id, PDO::PARAM_INT);
          $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
          $stmt->bindParam(':desc', $description, PDO::PARAM_STR);
          $stmt->bindParam(':duree', $dureeabonnement, PDO::PARAM_INT);
          $stmt->bindParam(':nbrBoisson', $nbrBoisson, PDO::PARAM_INT);
          $stmt->bindParam(':prixMensuel', $prixMensuel, PDO::PARAM_INT);
          $stmt->execute();

          return true;
        } catch (Exception $e) {
          EDatabase::rollBack();
          echo "erreur d'update d'abonnement : " . $e;
          return false;
        }
      }
    }
