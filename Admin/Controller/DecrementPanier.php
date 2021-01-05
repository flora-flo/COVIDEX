<?php
	include "../DB/Config.php";
	include "PanierCore.php";

	$panierC = new PanierCore();
	$liste = $panierC->GetOnePanier($_GET['id']);
	if($liste[0]->quantite==1)
	{
		$panierC->DeletePanier($_GET['id']);
	}
	else
	{
		$panierC->DecrementPanier($_GET['id']);

	}	

	

	echo "<script>window.location.href='../../Panier.php'</script>";

?>