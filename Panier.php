<?php require "Header.php" ?>
<?php
	include "Admin/DB/Config.php";
	include "Admin/Controller/PanierCore.php";
	include "Admin/Controller/FideliteCore.php";

	$panierC = new PanierCore();
	$fideliteC = new FideliteCore();

	$liste = $panierC->GetPanierForClient(1);

	$listeFidelite= $fideliteC->GetFidelitePourClient(1);

	
	// var_dump($liste);
?>
<?php if($listeFidelite[0]->somme>=100) { ?>
	<center><h3 style="color: red;">Vous avez <?=$listeFidelite[0]->somme?> points, vous aurez donc une remise de 10%</h3></center>
<?php } ?>
<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<th>#</th>
		<th>Photo</th>
		<th>Titre</th>
		<th>Quantite</th>
		<th>Prix Unitaire</th>
		<th>Prix Total</th>
		<th>Supprimer</th>
	</thead>
	<tbody>
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->identifiant?></td>
				<td><img style="height: 100px" src="<?="Admin/Images/".$row->photo?>"></td>
				<td><?=$row->titre?></td>
				<td><a href="Admin/Controller/DecrementPanier.php?id=<?=$row->identifiant?>"><button class="btn btn-danger"><i class="fa fa-minus"></i></button></a> <span style="font-size: 24px"><?=$row->quantite?></span><a href="Admin/Controller/IncrementPanier.php?id=<?=$row->identifiant?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a></td>
				<td><?=$row->prix?></td>
				<td><?=$row->prix*$row->quantite?></td>
				<td><a href="Admin/Controller/DeletePanier.php?id=<?=$row->identifiant?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<center><a href="Admin/Controller/ValiderCommande.php"><button class="btn btn-success">Valider Commande</button></a></center>

<?php require "Footer.php" ?>
