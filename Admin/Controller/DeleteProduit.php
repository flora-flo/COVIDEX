<?php
	include "../DB/Config.php";
	include "ProduitCore.php";

	$produitC = new ProduitCore();
	$produitC->DeleteProduit($_GET['id']);
	

	

	echo "<script>window.location.href='../Produits.php'</script>";

?>