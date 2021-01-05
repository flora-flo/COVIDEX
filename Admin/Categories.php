<?php require "Header.php"; ?>
<?php
include "Controller/CategorieCore.php";
include "DB/Config.php";
$categorieC = new CategorieCore();

$liste = $categorieC->GetAllCategories();

?>
<form class="form" action="Categories.php" method="get">
	<center>
		<h1>Ajouter une categorie</h1>
		<table>
			<tr>
				<td>
					<label>Categorie :</label>
				</td>
				<td>
					<input type="text" name="categorie" class="form-control">
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


<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Categorie</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td><?=$row->categorie?></td>
				<td>
					<a href="UpdateCategorie.php?id=<?=$row->id?>"><button class="btn btn-warning"><span class="fa fa-edit"></span></button></a>
					<a href="Controller/DeleteCategorie.php?id=<?=$row->id?>"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>


<?php

if(isset($_GET['submit']))
{
	$categorieC->AddCategorie($_GET['categorie']);
	echo "<script>window.location.href='Categories.php'</script>";
}



?>

<?php require "Footer.php"; ?>