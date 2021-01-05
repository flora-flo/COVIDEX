<?php
	include "../DB/Config.php";
	include "PanierCore.php";

	$panierC = new PanierCore();

	$liste = $panierC->CheckPanier($_GET['id'],1);

	if(count($liste)==0)
	{
		$panierC->addToCart($_GET['id'],1);
	}
	else
	{
		$panierC->addQuantite($liste[0]->id,$liste[0]->quantite+1);
	}

	

	echo "<script>window.location.href='../../Panier.php'</script>";

?>