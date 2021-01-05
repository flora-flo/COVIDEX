<?php
	include "../DB/Config.php";
	include "PanierCore.php";

	$panierC = new PanierCore();
	$panierC->DeletePanier($_GET['id']);
	

	

	echo "<script>window.location.href='../../Panier.php'</script>";

?>