<?php

	class FideliteCore
	{
		function addFidelite($client,$points)
		{
			$sql="insert into fidelite values (null,:client,:points,CURRENT_TIMESTAMP)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':points',$points);
			$req->bindValue(':client',$client);	

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}


		function GetFidelitePerClient()
		{
			$sql="SELECT *, sum(points) as somme from fidelite group by id_client";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}

		function GetFidelite($id)
		{
			$sql="SELECT * from fidelite where id_client=$id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function GetFidelitePourClient($id)
		{
			$sql="SELECT *, sum(points) as somme from fidelite where id_client= $id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste->fetchall(PDO::FETCH_OBJ);
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }
		}


		function RemovePoints($client)
		{
			$sql="insert into fidelite values (null,:client,-100,CURRENT_TIMESTAMP)";
			$db = config::getConnexion();
			try{
	        $req=$db->prepare($sql);
	        $req->bindValue(':client',$client);

	            $req->execute();
	           
	        }
	        catch (Exception $e){
	            echo 'Erreur: '.$e->getMessage();
	        }

		}




	}



?>