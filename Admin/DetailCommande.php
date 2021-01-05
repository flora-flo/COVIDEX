<?php require "Header.php"; ?>
<?php
include "Controller/PanierCore.php";
include "DB/Config.php";
$panierC = new PanierCore();

$liste = $panierC->GetPanierForCommande($_GET['id']);

?>

<h1>Details d'une commande</h1>


<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<th>#</th>
		<th>Photo</th>
		<th>Titre</th>
		<th>Quantite</th>
		<th>Prix Unitaire</th>
		<th>Prix Total</th>
	</thead>
	<tbody>
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->identifiant?></td>
				<td><img style="height: 100px" src="<?="Images/".$row->photo?>"></td>
				<td><?=$row->titre?></td>
				<td><span style="font-size: 24px"><?=$row->quantite?></span></td>
				<td><?=$row->prix?></td>
				<td><?=$row->prix*$row->quantite?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>


<?php require "Footer.php"; ?>