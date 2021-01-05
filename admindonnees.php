
<?PHP
	include "../controller/EvenementC.php";

	$evenementC=new EvenementC();
	$listeevents=$evenementC->afficherEvenements();

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADMIN AFFICHAGE</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="#" class="btn btn-info pull-right">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="adminevent.php" > LISTE DES  EVENEMENTS</a></li>
                             
                            <li><a href="admintype.php">LISTE DES TYPES </a></li>
                           
                            <li><a href="admincomntr.php">LISTE DES COMMENTAIRES</a></li>
                            <li><a href="admininscri.php">LES INSCRIPTIONS </a></li>

                        </ul>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">les donnees :</h4>  
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
            <!DOCTYPE html>
<html lang="en">
<head>
<title> tri evenement</title>
</head>
<body>
<div class="contrainer">
<div class="row">
<table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
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
<h4 class="header-line">Liste des inscri:</h4>
<table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
<!DOCTYPE html>
<html lang="en">
<head>
<title> tri evenement</title>
</head>
<body>
<div class="contrainer">
<div class="row">
<table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = ''>
<thead>
<tr>
<td>ID</td>
<td>NOM</td>
<td>PRENOM</td>
<td>EMAIL</td>
<td>TELEPHONE</td>
</tr>
</thead>
<tbody>
<?php
$conn = new mysqli('localhost','root','','aziz');
$sql = $conn->query('select * from reservation');
while($data = $sql->fetch_array()){ 
echo '<tr>
<td>'.$data['id'].'</td>
<td>'.$data['nom'] .'</td>
<td>'.$data['prenom'] .'</td>
<td>'.$data['email'] .'</td>
<td>'.$data['telephone'].'</td>
</tr>'
;}
?>
</tbody>
</table>

</div>
</div>
</body>
</html>
<h4 class="header-line">Liste des commentaires:</h4>
<table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
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
<td>IDCOM</td>
<td>COMMENTAIRE</td>
</tr>
</thead>
<tbody>
<?php
$conn = new mysqli('localhost','root','','aziz');
$sql = $conn->query('select * from comntr');
while($data = $sql->fetch_array()){ 
echo '<tr>
<td>'. $data['idcom'].'</td>
<td>'.$data['commentaire'] .'</td>
</tr>'
;}
?>
</tbody>
</table>

</div>
</div>
</body>
</html>
           
              </table>
              
         </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"  > Designed by : binarytheme.com</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
