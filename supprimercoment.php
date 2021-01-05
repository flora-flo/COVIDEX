<?PHP
	include "../controller/comentC.php";

	$commentaireC=new CommentaireC();
	
	if (isset($_POST["idcom"])){
		$commentaireC->supprimerCommentaire($_POST["idcom"]);
		header('Location:admincomntr.php');
	}

?>