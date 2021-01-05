<?PHP
	include "../controller/EvenementC.php";

	$evenementC=new EvenementC();
	
	if (isset($_POST["id"])){
		$evenementC->supprimerEvenement($_POST["id"]);
		header('Location:adminevent.php');
	}

?>