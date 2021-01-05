<?php

class config {
  private static $pdo = NULL;

  public static function getConnexion() {
	if (!isset(self::$pdo)) {
	  try{
		self::$pdo = new PDO('mysql:host=localhost;dbname=reclamation', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
		
	  }catch(Exception $e){
		die('Erreur: '.$e->getMessage());
	  }
	}
	return self::$pdo;
  }
}


	class reclamationC
	{
		
		function ajouter($reclamation){
			$db = config::getConnexion();
			$sql = "INSERT INTO reclamation (?,?,?) VALUES (:titre,:description,:role)";
			try {
				$req = $db->prepare($sql);
			
			$req->bindValue(':titre',$reclamation->getTitre());
			$req->bindValue(':description',$reclamation->getDescription());
			$req->bindValue(':role',$reclamation->getRole());
			$req->execute();
		}
		catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			

		}
		function afficherreclamation(){
			$db = config::getConnexion();
			$sql="SELECT * FROM reclamation ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		function afficherreclamationHost(){
			$db = config::getConnexion();
			$sql="SELECT * FROM reclamation where role= 'host'  ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		function afficherreclamationGest(){
			$db = config::getConnexion();
			$sql="SELECT * FROM reclamation where role= 'gest'  ";
			$liste=$db->query($sql);
			return $liste;
			
		}
		function supprimerReclamation($id){
			$db = config::getConnexion();
			$sql="DELETE FROM reclamation where id= :id";
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
	        $req->execute();
	        
		}
		
		function modifierreclamation($reclamation,$id){
			$db = config::getConnexion();
			
			$sql="UPDATE reclamation SET titre=:titre,description=:description,role=:role, created=:created WHERE id=:id";
			try{
				$req=$db->prepare($sql);
				
				$req->bindValue(':titre',$reclamation->getTitre());
				$req->bindValue(':description',$reclamation->getDescription());
				$req->bindValue(':role',$reclamation->getRole());
				$req->bindValue(':created',$reclamation->getCreated());
				$req->bindValue(':id',$reclamation->getId());
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recuperer_reclamation($id){
			
			$sql="SELECT * FROM reclamation WHERE id=$id";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
				$req->execute();
				
				$reclamation = $req->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		
	}

  ?>