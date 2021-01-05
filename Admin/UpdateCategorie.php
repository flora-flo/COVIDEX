<?php require "Header.php"; ?>
<?php
include "Controller/CategorieCore.php";
include "DB/Config.php";
$categorieC = new CategorieCore();

$liste = $categorieC->GetCategorieById($_GET['id']);
foreach($liste as $row)

?>
<form class="form" action="UpdateCategorie.php" method="get">
	<center>
		<h1>Modifier une categorie</h1>
		<table>
			<tr hidden>
				<td>
					<label>Id :</label>
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
					<input type="text" name="categorie" class="form-control" value="<?=$row->categorie?>">
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



<?php

if(isset($_GET['submit']))
{
	$categorieC->UpdateCategorie($_GET['id'],$_GET['categorie']);
	echo "<script>window.location.href='Categories.php'</script>";
}



?>

<?php require "Footer.php"; ?>