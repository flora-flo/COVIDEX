
<?php
include "ProduitCore.php";
include "../DB/Config.php";
$produitC = new ProduitCore();

	
	$target_dir = "../images/".basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

	$photo=$_POST['oldPhoto'];
	if (!empty($_FILES['photo']['name']))
	{
	 $photo=$_FILES['photo']['name'];
	}





	$produitC->UpdateProduit($_POST['categorie'],$_POST['titre'],$_POST['description'],$_POST['prix'],$photo,$_POST['id']);

	echo "<script>window.location.href='../Produits.php'</script>";

	echo $photo;



?>