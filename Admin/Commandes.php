<?php require "Header.php"; ?>
<?php
include "Controller/CommandeCore.php";
include "Controller/PanierCore.php";
include "DB/Config.php";
$commandeC = new CommandeCore();
$panierC = new PanierCore();

$liste = $commandeC->getAllCommandes();
$listePanier= $panierC->GetPanierForGraph();
?>

<h1>Gestion des commandes</h1>


<table role="table" class="table table-borderless table-data3">
	<thead role="rowgroup" style="    background-color: #EFEFEF;">
		<tr>
			<th>#</th>
			<th>Nom client</th>
			<th>Prenom Client</th>
			<th>Date</th>
			<th>Prix total</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($liste as $row) { ?>
			<tr>
				<td><?=$row->id?></td>
				<td>John</td>
				<td>Doe</td>
				<td><?=$row->date?></td>
				<td><?=$row->prix_total?></td>

				<td>
					<a href="DetailCommande.php?id=<?=$row->id?>"><button class="btn btn-primary"><span class="fa fa-eye"></span></button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<div id="chartContainer" style="height: 370px; width: 100%;">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>


<script>
window.onload = function () {

  CanvasJS.addColorSet("Shades",
                [//colorSet Array

               '#5DAFE3',
                '#5D6CE3',
                '#915DE3',
                '#D45DE3',
                '#E35DAF',
                '#E35D6C'               
                ]);

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	colorSet:"Shades",
	animationEnabled: true,
	backgroundColor :"transparent",
	title: {
		text: "Repartition des revenus par produit"
	},

	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y} DT",
		toolTipContent: "<b>{label}:</b> #percent%",
		click: explodePie,
		dataPoints: [
			<?php foreach ($listePanier as $rowP) { ?>
				{ y: <?=$rowP->somme?>, label: "<?=$rowP->titre?>" },
			<?php } ?>

		]
	}]
});
chart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}
 
}
</script>


<?php?>