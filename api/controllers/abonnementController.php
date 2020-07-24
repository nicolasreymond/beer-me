<?php
require abonnementModel;
require '../db/databse.php';
class abonnementController
{
    public function createAbonnement($nom, $description, $dureeabonnement, $nbrBoisson, $prixMensuel)
    {
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
            $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmt->bindParam(':desc', $description, PDO::PARAM_STR);
            $stmt->bindParam(':duree', $duree, PDO::PARAM_INT);
            $stmt->bindParam(':nbrBoisson', $nbrBoisson, PDO::PARAM_INT);
            $stmt->bindParam(':prixMensuel', $prixMensuel, PDO::PARAM_INT);
            $stmt->execute();

            return EDatabase::lastInsertId();
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

        foreach ($abonnement as $results) {
            echo $abonnement['nomAbonnement'];
            array_push($abonnements, new abonnementModel(
                $abonnement['idABONNEMENT'],
                $abonnement['nomAbonnement'],
                $abonnement['descriptionAbonnement'],
                $abonnement['dureeAbonnement'],
                $abonnement['nbrBoissonAbonnement'],
                $abonnement['prixMensuelAbonnement']
            ));
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


        return $abonnement = new abonnementModel(
          $result['idABONNEMENT'],
          $result['nomAbonnement'],
          $result['descriptionAbonnement'],
          $result['dureeAbonnement'],
          $result['nbrBoissonAbonnement'],
          $result['prixMensuelAbonnement']
        );
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
        echo "erreur de création d'abonnement : " . $e;
        return false;
      }
    }
}
