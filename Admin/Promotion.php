<?php require "header.php"; ?>
<?php
include "Controller/ProduitCore.php";
include "Controller/PromotionCore.php";
include "DB/Config.php";
$produitC = new ProduitCore();
$promotionC = new PromotionCore();

$listeProduits = $produitC->getAllProduits();

$liste=$promotionC->GetAllPromotions();

?>
<form  action="Promotion.php" method="post">
	<center>
		<h1>Ajouter une promotion</h1>
		<table>
			<tr>
				<td>
					<label>Produit :</label>
				</td>
				<td>
					<select name="produit" class="form-control" >
						<?php foreach($listeProduits as $rowProduit) { ?>
							<option value="<?=$rowProduit->id?>"><?=$rowProduit->titre?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Date Debut :</label>
				</td>
				<td>
					<input type="date" name="date_debut" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					<label>Date Fin :</label>
				</td>
				<td>
					<input type="date" name="date_fin" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					<label>Remise (DNT):</label>
				</td>
				<td>
					<input type="number" name="remise" class="form-control">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Ajouter" class="btn btn-success form-control">
				</td>
			</tr>
		</table>	
	</center>
</form>
<center><h1>Les promotions en cours</h1></center>
<a href="HistoriquePromotions.php">Voir historique des promotions</a>
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
				<td><?=$row->date_fin?></td>
				<td><?=$row->remise?> dt</td>
				<td>
					<a href="UpdatePromotion.php?id=<?=$row->id?>"><button class="btn btn-warning"><span class="fa fa-edit"></span></button></a>
					<a href="Controller/DeletePromotion.php?id=<?=$row->id?>"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>



<?php

if(isset($_POST['submit']))
{
	$promotionC->addPromotion($_POST['produit'],$_POST['date_debut'],$_POST['date_fin'],$_POST['remise']);
	echo "<script>window.location.href='Promotion.php'</script>";
}

?>
<?php require "footer.php"; ?>