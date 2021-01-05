<?php require "header.php"; ?>
<?php
include "Controller/ProduitCore.php";
include "Controller/PromotionCore.php";
include "DB/Config.php";
$produitC = new ProduitCore();
$promotionC = new PromotionCore();

$listeProduits = $produitC->getAllProduits();

$liste=$promotionC->GetOldPromotions();

?>

<center><h1>L'historique des promotions</h1></center>
<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Photo</th>
			<th>Titre</th>
			<th>Prix</th>
			<th>Date debut</th>
			<th>Date Fin</th>
			<th>Remise</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td><img src="<?='Images/'.$row->photo?>" height=100></td>
				<td><?=$row->titre?></td>
				<td><?=$row->prix?> dt</td>
				<td><?=$row->date_debut?></td>
				<td><?=$row->date_debut?></td>
				<td><?=$row->remise?> dt</td>
				<td>
					<a href="Controller/DeletePromotion.php?id=<?=$row->id?>"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>




<?php require "footer.php"; ?>