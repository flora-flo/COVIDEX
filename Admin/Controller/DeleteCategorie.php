<?php
	include "../DB/Config.php";
	include "CategorieCore.php";

	$categorieC = new CategorieCore();
	$categorieC->DeleteCategorie($_GET['id']);
	

	

	echo "<script>window.location.href='../Categories.php'</script>";

?>