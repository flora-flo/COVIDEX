<?php require "Header.php"; ?>
<?php
include "Controller/CategorieCore.php";
include "Controller/ProduitCore.php";
include "DB/Config.php";
$produitC = new ProduitCore();
$categorieC = new CategorieCore();

$listeCategories = $categorieC->GetAllCategories();
$liste = $produitC->getProduitById($_GET['id']);
foreach ($liste as $row) {}

?>
<form  action="Controller/UpdateProduit.php" method="post" enctype="multipart/form-data">
	<center>
		<h1>Modifier un produit</h1>
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
					<label>Categorie :</label>
				</td>
				<td>
					<select name="categorie" class="form-control" >
						<?php foreach($listeCategories as $rowCategorie) { ?>
							<option value="<?=$rowCategorie->id?>" <?php if($row->id_categorie == $rowCategorie->id ) {echo "selected";}?>><?=$rowCategorie->categorie?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Titre :</label>
				</td>
				<td>
					<input type="text" name="titre" class="form-control" value="<?=$row->titre?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Description :</label>
				</td>
				<td>
					<input type="text" name="description" class="form-control" value="<?=$row->description?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Prix :</label>
				</td>
				<td>
					<input type="number" name="prix" class="form-control" value="<?=$row->prix?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Photo :</label>
				</td>
				<td>
					<input type="file" name="photo" class="form-control">
				</td>
			</tr>
			<tr hidden>
				<td>
					<label>Old Photo :</label>
				</td>
				<td>
					<input type="text" name="oldPhoto" class="form-control" value="<?=$row->photo?>">
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