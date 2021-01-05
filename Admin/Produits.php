<?php require "Header.php"; ?>
<?php
include "Controller/CategorieCore.php";
include "Controller/ProduitCore.php";
include "DB/Config.php";
$produitC = new ProduitCore();
$categorieC = new CategorieCore();

$listeCategories = $categorieC->GetAllCategories();
$liste = $produitC->getAllProduits();
?>
<form  action="Produits.php" method="post" enctype="multipart/form-data">
	<center>
		<h1>Ajouter un produit</h1>
		<table>
			<tr>
				<td>
					<label>Categorie :</label>
				</td>
				<td>
					<select name="categorie" class="form-control" >
						<?php foreach($listeCategories as $rowCategorie) { ?>
							<option value="<?=$rowCategorie->id?>"><?=$rowCategorie->categorie?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Titre :</label>
				</td>
				<td>
					<input type="text" name="titre" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					<label>Description :</label>
				</td>
				<td>
					<input type="text" name="description" class="form-control">
				</td>
			</tr>
			<tr>
				<td>
					<label>Prix :</label>
				</td>
				<td>
					<input type="number" name="prix" class="form-control">
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
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Ajouter" class="btn btn-success form-control">
				</td>
			</tr>
		</table>	
	</center>
</form>


<input type="text" placeholder="Chercher .." class="form-control" style="display: inline-block; padding: 11px 30px 6px; margin: 20px 0px 30px; font-size: 15px;  border-radius: 5px" id="myInput">
<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Photo</th>
			<th>Titre</th>
			<th>Description</th>
			<th>Prix</th>
			<th>Categorie</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td><img src="<?='Images/'.$row->photo?>" height=100></td>
				<td><?=$row->titre?></td>
				<td><?=$row->description?></td>
				<td><?=$row->prix?> dt</td>
				<td><?=$row->categorie?></td>
				<td>
					<a href="UpdateProduit.php?id=<?=$row->id?>"><button class="btn btn-warning"><span class="fa fa-edit"></span></button></a>
					<a href="Controller/DeleteProduit.php?id=<?=$row->id?>"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<?php

if(isset($_POST['submit']))
{
	$target_dir = "images/".basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);

	$produitC->addProduit($_POST['categorie'],$_POST['titre'],$_POST['description'],$_POST['prix'],$_FILES["photo"]["name"]);

	echo "<script>window.location.href='Produits.php'</script>";
}



?>

<?php require "Footer.php"; ?>