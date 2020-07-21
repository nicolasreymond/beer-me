<?php
	// Connect to database
	require_once './db/database.php';
	$request_method = $_SERVER["REQUEST_METHOD"];

	function getBoissons()
	{
		
		$query = "SELECT * FROM BOISSON ORDER BY idBOISSON LIMIT 50";
		$response = array();
		$stmt = EDatabase::prepare($query);
		$stmt->execute(array(':id' => $id));
		$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}
	
	function getBoisson($id=0)
	{
		$query = "SELECT * FROM BOISSON";
		if($id > 0)
		{
			$query .= " WHERE idBOISSON=:id LIMIT 1";
		}
		$response = array();
		$stmt = EDatabase::prepare($query);
		$stmt->execute(array(':id' => $id));
		$response = $stmt->fetchAll(PDO::FETCH_BOTH);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_PRETTY_PRINT);
	}

	function AddBoisson()
	{
		$sql = "INSERT INTO BOISSON (nomBoisson, descriptionBoisson, pourcentageAlcoolBoisson, stockBoisson, prixBoisson, FK_idBRASSERIE, FK_idTYPEBOISSON) 
						   VALUES (:nom, :des, :pou, :sto, :pri, :FKB, :FKT)";
						   
		$sth = EDatabase::prepare($sql);
		try {
			$sth->bindParam(':nom', $_POST["nomBoisson"], PDO::PARAM_STR);
			$sth->bindParam(':des', $_POST["descriptionBoisson"], PDO::PARAM_STR);
			$sth->bindParam(':pou', $_POST["pourcentageAlcoolBoisson"]);
			$sth->bindParam(':sto', $_POST["stockBoisson"], PDO::PARAM_INT);
			$sth->bindParam(':pri', $_POST["prixBoisson"]);
			$sth->bindParam(':FKB', $_POST["FK_idBRASSERIE"], PDO::PARAM_INT);
			$sth->bindParam(':FKT', $_POST["FK_idTYPEBOISSON"], PDO::PARAM_INT);
			$sth->execute();
		} catch (PDOException $e) {
			echo 'Problème de lecture de la base de données: ' . $e->getMessage();
			EDatabase::rollBack();
			return false;
		}
		
		header('Content-Type: application/json');
		echo json_encode($sth);
	}

	function deleteBoisson($id)
	{
		$query = "DELETE FROM BOISSON WHERE id=:id";
		$sth = EDatabase::prepare($query);
		try {
			$sth->bindParam(':id', $id, PDO::PARAM_INT);   
			$sth->execute();
		} catch (PDOException $e) {
			echo 'Problème de lecture de la base de données: ' . $e->getMessage();
			EDatabase::rollBack();
			return false;
		}

		header('Content-Type: application/json');
		echo json_encode($sth);
	}
	

	function updateBoisson()
  	{
		// $_PUT = array(); //tableau qui va contenir les données reçues
		$tmp = (file_get_contents('php://input'));
		$_PUT = (json_decode($tmp, true));
		//construire la requête SQL
		$sql="UPDATE BOISSON SET brewery_id=:bre, name=:nam, cat_id=:cat, style_id=:sty, abv=:abv, ibu=:ibu, srm=:srm, upc=:upc, filepath=:fil, descript=:des, add_user=:add, last_mod=:las WHERE id=:id";
		
		var_dump($_PUT["commentaire"]);
		var_dump($_PUT["postType"]);
		var_dump($_PUT["id"]);
		$sth = EDatabase::prepare($sql);
		try {
			$sth->bindParam(':id',  $_PUT["id"], PDO::PARAM_INT);
			$sth->bindParam(':bre', $_PUT["brewery_id"], PDO::PARAM_INT);
			$sth->bindParam(':nam', $_PUT["name"], PDO::PARAM_STR);
			$sth->bindParam(':cat', $_PUT["cat_id"], PDO::PARAM_INT);
			$sth->bindParam(':sty', $_PUT["style_id"], PDO::PARAM_INT);
			$sth->bindParam(':abv', $_PUT["abv"]);
			$sth->bindParam(':ibu', $_PUT["ibu"]);
			$sth->bindParam(':srm', $_PUT["srm"]);
			$sth->bindParam(':upc', $_PUT["upc"], PDO::PARAM_INT);
			$sth->bindParam(':fil', $_PUT["filepath"], PDO::PARAM_STR);
			$sth->bindParam(':des', $_PUT["descript"], PDO::PARAM_STR);
			$sth->bindParam(':add', $_PUT["add_user"], PDO::PARAM_INT);
			$sth->bindParam(':las', date("Y-m-d"));
			$sth->execute();
		} catch (PDOException $e) {
			echo 'Problème de lecture de la base de données: ' . $e->getMessage();
			EDatabase::rollBack();
			return false;
		}
		
		header('Content-Type: application/json');
		echo json_encode($sth);
	}

	switch($request_method)
	{
		
		case 'GET':
			// Retrive Boisson
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				getBoisson($id);
			}
			else
			{
				getBoissons();
			}
			break;

		case 'POST':
			// Ajouter une bière
			AddBoisson();
			break;

		case 'DELETE':
    		// Supprimer une bière
			$id = intval($_GET["id"]);
			deleteBoisson($id);
			break;

		case 'PUT':
			// Modifier une bière
			updateBoisson();
			break;

		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;

	}
?>