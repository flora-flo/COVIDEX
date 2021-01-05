<?php 

	class CategorieCore 
	{


		function AddCategorie($categorie)
		{
			$sql="insert into categorie values (null,:categorie)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':categorie',$categorie);

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function GetAllCategories()
		{
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function DeleteCategorie($id)
		{
			$sql="DELETE FROM categorie where id=:id";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
			$req->bindValue(':id',$id);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function GetCategorieById($id)
		{
			$sql="SELECT * FROM categorie where id = $id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function UpdateCategorie($id,$categorie)
		{
			$sql="Update categorie set categorie = :categorie where id = :id";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':categorie',$categorie);
			$req->bindValue(':id',$id);	


	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}
	}


?>