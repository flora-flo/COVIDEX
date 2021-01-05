<?php

	class ProduitCore
	{
		function getAllProduits()
		{
			$sql="select p.*, pr.remise, c.id as idcat, c.categorie from produit p left join promotion pr on p.id = pr.id_produit and pr.date_fin> CURRENT_DATE join categorie c  on p.id_categorie = c.id";
			//$sql="SELECT p.*, c.id as idcat, c.categorie from produit p join categorie c on p.id_categorie = c.id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function getProduitById($id)
		{
			$sql="SELECT p.*, c.id as idcat, c.categorie from produit p join categorie c where p.id=$id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}




		function addProduit($id_categorie,$titre,$description,$prix,$photo)
		{
			$sql="insert into produit values (null,:titre, :description,:prix,:categorie,:photo)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':titre',$titre);
			$req->bindValue(':description',$description);
			$req->bindValue(':prix',$prix);	
			$req->bindValue(':categorie',$id_categorie);		
			$req->bindValue(':photo',$photo);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function UpdateProduit($id_categorie,$titre,$description,$prix,$photo,$id)
		{
			$sql="UPDATE produit set titre= :titre, description= :description, prix = :prix, id_categorie=:id_categorie, photo =:photo where id=:id ";
			$db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
	        $req->bindValue(':titre',$titre);
			$req->bindValue(':description',$description);
			$req->bindValue(':prix',$prix);	
			$req->bindValue(':id_categorie',$id_categorie);		
			$req->bindValue(':photo',$photo);


			$req->bindValue(':id',$id);	


	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function DeleteProduit($id)
		{
			$sql="DELETE FROM produit where id=:id";
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


		function GetLogementById($id)
		{
			$sql="SELECT l.id, l.date_aller,l.date_retour,l.prix,l.description,l.id_destination,l.photo, d.destination, d.pays FROM logement l join destination d on l.id_destination = d.id where l.id=$id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


	}


?>