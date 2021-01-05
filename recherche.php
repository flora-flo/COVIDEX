
                        

     <html>
     <form method="POST" action=""> 
     entrer l identifiant : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php
     include_once '../Model/Evenement.php';
     include_once '../Controller/EvenementC.php';
 

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'aziz';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
        "SELECT id,titre,date,lieu,descrip,nbParticip FROM evenement
         WHERE id LIKE '%$recherche%'
         LIMIT 10");

     // affichage du résultat
     if( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: TITRE : '.$r['titre'].' DATE :'.$r['date'].' LIEU :'.$r['lieu'].'DESCRIP :'.$r['descrip'].' NBP'.$r['nbParticip'].' <br />';
    }
    else 
    echo  " l'evenement n'existe pas "
?>