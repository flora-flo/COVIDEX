<?php 
include "PromotionCore.php";
include "../DB/Config.php";

$promotionC = new PromotionCore();
if (isset($_POST['submit'])) {

	$promotionC->UpdatePromotion($_POST['id'],$_POST['produit'],$_POST['date_debut'],$_POST['date_fin'],$_POST['remise']);

}

echo "<script>window.location.href='../Promotion.php';</script>";

?>
