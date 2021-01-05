<?php

	class PromotionCore
	{
		function addPromotion($produit,$date_debut,$date_fin,$remise)
		{
			$sql="insert into promotion values (null,:produit,:date_debut,:date_fin,:remise)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':produit',$produit);
	        $req->bindValue(':date_debut',$date_debut);
	        $req->bindValue(':date_fin',$date_fin);
	        $req->bindValue(':remise',$remise);

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function UpdatePromotion($id,$produit,$date_debut,$date_fin,$remise)
		{
			$sql="UPDATE promotion set id_produit=:produit, date_debut = :date_debut, date_fin= :date_fin, remise = :remise where id=:id";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':produit',$produit);
	        $req->bindValue(':date_debut',$date_debut);
	        $req->bindValue(':date_fin',$date_fin);
	        $req->bindValue(':remise',$remise);
			$req->bindValue(':id',$id);
	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function GetAllPromotions()
		{
			$sql="Select pr.*, p.photo, p.titre, p.prix from promotion pr join produit p on pr.id_produit = p.id and CURRENT_DATE< pr.date_fin";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}
		function GetPromotionById($id)
		{
			$sql="SELECT * from promotion where id=$id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function GetOldPromotions()
		{
			$sql="Select pr.*, p.photo, p.titre, p.prix from promotion pr join produit p on pr.id_produit = p.id and CURRENT_DATE> pr.date_fin";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}
		


		function deletePromotion($id)
		{
			$sql="DELETE from promotion where id = :id";
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
	}


?>