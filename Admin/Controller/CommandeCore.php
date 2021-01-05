<?php

	class CommandeCore
	{
		function AddCommande($client,$prixtotal)
		{
			$sql="insert into commande values (null,:client, CURRENT_TIMESTAMP,:prixtotal)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':prixtotal',$prixtotal);
			$req->bindValue(':client',$client);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}

		function GetOneCommande($id)
		{
			$sql="SELECT * from commande where id= $id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function GetLastCommande()
		{
			$sql="SELECT * from commande Order by id desc limit 1";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function getAllCommandes()
		{
			$sql="SELECT * from commande";
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