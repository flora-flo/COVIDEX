
<?PHP
	include "../controller/comentC.php";

	$commentaireC=new CommentaireC();
	$listecoments=$commentaireC->afficherCommentaire();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des commentaires </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un commentaire</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				
				
				<th>COMMENTAIRE</th>
				<th>supprimer</th>
				
			</tr>

			<?PHP
				foreach($listecoments as $coment){
			?>
				<tr>
					
					
                    <td><?PHP echo $coment['commentaire']; ?></td>
					
					<td>
						<form method="POST" action="supprimercoment.php">
						<input type="submit" name="supprimer" value="supprimer">
						
						</form>
					</td>
					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
