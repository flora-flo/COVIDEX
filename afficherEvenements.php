<?PHP
	include "../controller/EvenementC.php";

	$evenementC=new EvenementC();
	$listeevents=$evenementC->afficherEvenements();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Evenements </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un evenement</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>ID</th>
				<th>TYPE</th>
				<th>TITRE</th>
				<th>DATE</th>
				<th>LIEU</th>
				<th>DESCRIP</th>
				<th>NB_PARTICIPANT</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeevents as $event){
			?>
				<tr>
					<td><?PHP echo $event['id']; ?></td>
					<td><?PHP echo $event['tpe']; ?></td>
					<td><?PHP echo $event['titre']; ?></td>
					<td><?PHP echo $event['date']; ?></td>
					<td><?PHP echo $event['lieu']; ?></td>
					<td><?PHP echo $event['descrip']; ?></td>
					<td><?PHP echo $event['nbParticip']; ?></td>
					<td>
						<form method="POST" action="supprimerEvenement.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $event['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierEvenement.php?id=<?PHP echo $event['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
		<html>
     <form method="POST" action=""> 
     entrer l'identifiant de l'evenement pour voir plus de details : <input type="text" name="recherche">
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
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: TITRE : '.$r['titre'].' DATE :'.$r['date'].' LIEU :'.$r['lieu'].'DESCRIP :'.$r['descrip'].' NBP'.$r['nbParticip'].' <br />';
    }
?>
	</body>
</html>
