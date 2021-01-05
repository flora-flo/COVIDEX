<?php
	include "../DB/Config.php";
	include "PromotionCore.php";

	$promotionC = new PromotionCore();
	$promotionC->DeletePromotion($_GET['id']);
	

	

	echo "<script>window.location.href='../Promotion.php'</script>";

?>