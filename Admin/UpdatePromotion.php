<?php require "Header.php"; ?>
<?php
include "Controller/PromotionCore.php";
include "Controller/ProduitCore.php";
include "DB/Config.php";
$produitC = new ProduitCore();
$promotionC = new PromotionCore();

$listeProduits = $produitC->getAllProduits();
$liste = $promotionC->getPromotionById($_GET['id']);
foreach ($liste as $row) {}

?>
<form  action="Controller/UpdatePromotion.php" method="post">
	<center>
		<h1>Modifier une promotion</h1>
		<table>
			<tr hidden>
				<td>
					<label>ID :</label>
				</td>
				<td>
					<input type="text" name="id" class="form-control" value="<?=$row->id?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Produit :</label>
				</td>
				<td>
					<select name="produit" class="form-control" >
						<?php foreach($listeProduits as $rowProduit) { ?>
							<option value="<?=$rowProduit->id?>" <?php if($row->id_produit == $rowProduit->id ) {echo "selected";}?>><?=$rowProduit->titre?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Date debut :</label>
				</td>
				<td>
					<input type="date" name="date_debut" class="form-control" value="<?=$row->date_debut?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Date fin :</label>
				</td>
				<td>
					<input type="date" name="date_fin" class="form-control" value="<?=$row->date_fin?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Remise :</label>
				</td>
				<td>
					<input type="number" name="remise" class="form-control" value="<?=$row->remise?>">
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Modifier" class="btn btn-success form-control">
				</td>
			</tr>
		</table>	
	</center>
</form>




<?php require "Footer.php"; ?>