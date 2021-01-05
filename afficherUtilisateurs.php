<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new UtilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Utilisateur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>email</th>
				<th>telephone</th>
				<th>supprimer</th>
				
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom']; ?></td>
					<td><?PHP echo $user['prenom']; ?></td>
					<td><?PHP echo $user['email']; ?></td>
					<td><?PHP echo $user['telephone']; ?></td>
					<td>
						<form method="POST" action="supprimerUtilisateurs.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
