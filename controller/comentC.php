<?PHP
	include "../config.php";
	require_once '../Model/coment.php';

	class CommentaireC {
		
		function ajouterCommentaire($Commentaire){
			$sql="INSERT INTO comntr ( commentaire) 
			VALUES (:commentaire)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					'commentaire' => $Commentaire->getCommentaire()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCommentaire(){
			
			$sql="SELECT * FROM comntr";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCommentaire($idcom){
			$sql="DELETE FROM comntr WHERE idcom= :idcom";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcom',$idcom);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
		
	}

?>