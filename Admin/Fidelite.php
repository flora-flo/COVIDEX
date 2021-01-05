<?php require "header.php"; ?>
<?php
include "DB/Config.php";
include "Controller/FideliteCore.php";

$fideliteC  = new FideliteCore();

$liste= $fideliteC->GetFidelitePerClient();

?>


<center><h1>Nombre de points total par client</h1></center>
<input type="text" placeholder="Chercher .." class="form-control" style="display: inline-block; padding: 11px 30px 6px; margin: 20px 0px 30px; font-size: 15px;  border-radius: 5px" id="myInput">
<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Nom client</th>
			<th>Prenom Client</th>
			<th>Nombre de points</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody id="myTable">
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td>John</td>
				<td>Doe</td>
				<td><?=$row->somme?></td>

				<td>
					<a href="DetailFidelite.php?id=<?=$row->id_client?>"><button class="btn btn-primary"><span class="fa fa-eye"></span></button></a>
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



<?php require "footer.php"; ?>