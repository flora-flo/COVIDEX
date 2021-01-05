<?php require "header.php"; ?>
<?php
include "DB/Config.php";
include "Controller/FideliteCore.php";

$fideliteC  = new FideliteCore();

$liste= $fideliteC->GetFidelite($_GET['id']);

?>


<center><h1>Details sur la fidelite de John Doe</h1></center>

<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Nom client</th>
			<th>Prenom Client</th>
			<th>Nombre de points</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td>John</td>
				<td>Doe</td>
				<td><?=$row->points?></td>
				<td><?=$row->date?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>



<?php require "footer.php"; ?>