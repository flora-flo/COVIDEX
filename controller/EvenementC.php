<?PHP
	include "../config.php";
	require_once '../Model/Evenement.php';

	class EvenementC {
		
		function ajouterEvenement($Evenement){
			$sql="INSERT INTO evenement (tpe,titre, date, lieu, descrip, nbParticip) 
			VALUES (:tpe,:titre,:date,:lieu,:descrip,:nbParticip)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([

					'tpe' => $Evenement->getTpe(),
					'titre' => $Evenement->getTitre(),
					'date'  => $Evenement->getDate(),
					'lieu' => $Evenement->getLieu(),
					'descrip' => $Evenement->getDescrip(),
					'nbParticip' => $Evenement->getNbParticip()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherEvenements(){
			
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerEvenement($id){
			$sql="DELETE FROM evenement WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierEvenement($Evenement, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET
	                    tpe = :tpe,		
						lieu = :lieu,  
						titre = :titre, 
						date = :date,
						lieu = :lieu,
						descrip = :descrip,
						nbParticip = :nbParticip
					WHERE id = :id'
				);
				$query->execute([
					'tpe' => $Evenement->getTpe(),
					'titre' => $Evenement->getTitre(),
					'date' => $Evenement->getDate(),
					'lieu' => $Evenement->getLieu(),
					'descrip' => $Evenement->getDescrip(),
					'nbParticip' => $Evenement->getNbParticip(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererEvenement($id){
			$sql="SELECT * from evenement where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$event=$query->fetch();
				return $event;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererEvenement1($id){
			$sql="SELECT * from evenement where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$event = $query->fetch(PDO::FETCH_OBJ);
				return $event;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>