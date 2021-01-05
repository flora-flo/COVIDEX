<?php

	class PanierCore
	{
		function addToCart($idproduit,$client)
		{
			$sql="insert into panier values (null,:produit, 1,:client,0)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':produit',$idproduit);
			$req->bindValue(':client',$client);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function CheckPanier($idproduit,$client)
		{
			$sql="SELECT * FROM Panier where id_produit = $idproduit and id_client = $client and id_commande = 0";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function addQuantite($id,$quantite)
		{
			$sql="UPDATE panier set quantite = :quantite where id=:id";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':quantite',$quantite);
			$req->bindValue(':id',$id);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function GetPanierForClient($idclient)
		{
			$sql="SELECT p.id as identifiant, p.id_produit, p.quantite, p.id_client, p.id_commande, pr.id, pr.titre, pr.prix,pr.photo from panier p join produit pr on p.id_produit = pr.id where id_commande=0 and id_client = $idclient";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function GetPanierForGraph()
		{
			$sql="SELECT sum(pr.prix*p.quantite) as somme,pr.titre, c.categorie FROM panier p join produit pr on p.id_produit=pr.id join categorie c on pr.id_categorie = c.id where  p.id_commande!=0 group by pr.id ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function GetPanierForCommande($id)
		{
			$sql="SELECT p.id as identifiant, p.id_produit, p.quantite, p.id_client, p.id_commande, pr.id, pr.titre, pr.prix,pr.photo from panier p join produit pr on p.id_produit = pr.id where p.id_commande=$id ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function DeletePanier($id)
		{
			$sql="DELETE FROM panier where id=:id";
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


		function IncrementPanier($id)
		{
			$sql="UPDATE panier set quantite = quantite+1 where id=:id";
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


		function GetOnePanier($id)
		{
			$sql="SELECT * from panier where id= $id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function DecrementPanier($id)
		{
			$sql="UPDATE panier set quantite = quantite-1 where id=:id";
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


		function GetSomme($idclient)
		{
			$sql="SELECT sum(p.quantite*pr.prix) as somme FROM panier p join produit pr on p.id_produit=pr.id where id_client = $idclient and id_commande = 0 ";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function affecterPanierCommande($id,$client)
		{
			$sql="UPDATE panier set id_commande = :commande where id_client=:client and id_commande=0";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':commande',$id);
			$req->bindValue(':client',$client);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

	}


?>