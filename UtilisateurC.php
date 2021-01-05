<?PHP
	include "../config.php";
	require_once '../model/Utilisateur.php';

	class UtilisateurC {
		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO Utilisateur (nom, prenom, email, password, adresse, date, telephone) 
			VALUES (:nom,:prenom,:email, :password :adresse, :date, :telephone)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'password' => $Utilisateur->getPassword(),
					'adresse' => $Utilisateur->getadresse(),
					'date' => $Utilisateur->getdate(),
					'telephone' => $Utilisateur->gettelephone()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			//var_dump($db);
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerUtilisateur($id){
			$sql="DELETE FROM Utilisateur WHERE id= :id";
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
		function modifierUtilisateur($Utilisateur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Utilisateur SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						password = :password,
						adresse = :adresse,
						date = :date,
						telephone = :telephone,
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'password' => $Utilisateur->getPassword(),
					'adresse' => $Utilisateur->getadresse(),
					'date' => $Utilisateur->getdate(),
					'telephone' => $Utilisateur->gettelephone(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererUtilisateur($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererUtilisateur1($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>