<?php
	include "../DB/Config.php";
	include "PanierCore.php";
	include "CommandeCore.php";
	include "FideliteCore.php";


	$panierC = new PanierCore();
	$commandeC = new CommandeCore();
	$fideliteC = new FideliteCore();


	$liste = $panierC->GetSomme(1);

	$listeFidelite= $fideliteC->GetFidelitePourClient(1);

	if($listeFidelite[0]->somme>=100)
	{
		$commandeC->AddCommande(1,$liste[0]->somme*0.9);
		$fideliteC->RemovePoints(1);

	}
	else
	{
		$commandeC->AddCommande(1,$liste[0]->somme);
	}

	

	$listeCommande = $commandeC->GetLastCommande();

	$panierC->affecterPanierCommande($listeCommande[0]->id,1);



	$fideliteC->addFidelite(1,$liste[0]->somme/10);


	$listeFidelite= $fideliteC->GetFidelitePourClient(1);
	if($listeFidelite[0]->somme>=100)
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Medical Shop"<info@MedicalShop.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<center>Vous avez plus de 100 points de fidelite ! vous aurez une reduction de 10% sur votre prochaine commande</center>
			</body>
		</html>
		';

		mail("khalilkouki716@gmail.com", "Fidelite !", $message, $header);

	}






	$header="MIME-Version: 1.0\r\n";
	$header.='From:"Medical Shop"<info@MedicalShop.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$message='
	<html>
		<body>
			<center>Votre Commande a ete ajouté avec succes !</center>
		</body>
	</html>
	';

	mail("khalilkouki716@gmail.com", "Commande !", $message, $header);
		

	

	echo "<script>window.location.href='../../Produits.php'</script>";

?>