<!DOCTYPE html>
<html lang="en">
<head>
<title> tri evenement</title>
</head>
<body>
<div class="contrainer">
<div class="row">
<table class="table table-bordred table-hover">
<thead>
<tr>
<td>ID</td>
<td>TPE</td>
<td>TITRE</td>
<td>DATE</td>
<td>LIEU</td>
<<td>DESCRIP</td>
<td>NBPARTICP</td>
</tr>
</thead>
<tbody>
<?php
$conn = new mysqli('localhost','root','','aziz');
$sql = $conn->query('select * from evenement');
while($data = $sql->fetch_array()){ 
echo '<tr>
<td>'. $data['id'].'</td>
<td>'.$data['tpe'] .'</td>
<td>'.$data['titre'] .'</td>
<td>'.$data['date'] .'</td>
<td>'.$data['lieu'].'</td>
<td>'.$data['descrip'].'</td>
<td>'.$data['nbParticip'] .'</td>
</tr>'
;}
?>
</tbody>
</table>

</div>
</div>
</body>
</html>