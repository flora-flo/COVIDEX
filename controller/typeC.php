<?PHP
include "../config.php";


class typeC
{
    function ajoutert($typee)
    {
        $sql = "insert into genre (idtype,type) values (:idtype,:type)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':idtype', $typee->getidtype());
            $req->bindValue(':type', $typee->gettype());


            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function affichert()
    {
        $sql = "SELECT * from genre";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }


    function supprimert($idtype)
    {
        $sql = "DELETE FROM genre WHERE idtype= :idtype";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idtype', $idtype);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }
    function recuperert($idtype){
        $sql="SELECT * from genre where idtype=$idtype";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifiert($typee, $idtype)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE type SET 
                       idtype =:idtype,
						type = :type, 
						
						
					
					WHERE idtype = :idtype'
            );

            $query->execute([
                'idtype'=>$typee->getidtype(),
                'type'=>$typee->gettype(),
               
                // 'idbesoin'=>$association->getidbesoin(),
                'idtype'=>$idtype
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

}
?>

