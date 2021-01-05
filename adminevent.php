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
                    <h4 class="header-line">Liste des evenements:</h4>  
                </div>
            </div>
         
            <table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
            
            <tr>
                <th>ID</th>   
                <th>TYPE</th>
                <th>TITRE</th>
				<th>DATE</th>
				<th>LIEU</th>
				<th>DESCRIP</th>
				<th>NB_PARTICIPANT</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeevents as $event){
			?>
				<tr>
					<td><?PHP echo $event['id']; ?></td>
					<td><?PHP echo $event['tpe']; ?></td>
					<td><?PHP echo $event['titre']; ?></td>
					<td><?PHP echo $event['date']; ?></td>
					<td><?PHP echo $event['lieu']; ?></td>
					<td><?PHP echo $event['descrip']; ?></td>
					<td><?PHP echo $event['nbParticip']; ?></td>
					<td>
						<form method="POST" action="supprimerEvenement.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $event['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierEvenement.php?id=<?PHP echo $event['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
              </table>
              <html>
     <form method="POST" action=""> 
     entrer l'identifiant de l'evenement pour voir plus de details : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php
     include_once '../Model/Evenement.php';
     include_once '../Controller/EvenementC.php';
 

    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'aziz';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
        "SELECT id,titre,date,lieu,descrip,nbParticip FROM evenement
         WHERE id LIKE '%$recherche%'
         LIMIT 10");

     // affichage du résultat
     if( $r = mysqli_fetch_array($q)){
        echo 'Résultat de la recherche: <h1>TITRE</h1> : '.$r['titre'].' <h1>DATE</h1> :'.$r['date'].'<h1>LIEU</h1>:'.$r['lieu'].'<h1>DESCRIP</h1> :'.$r['descrip'].' <h1>NBP</h1>:'.$r['nbParticip'].' <br />';
       }
       else 
       echo  " l'evenement n'existe pas "
?>
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
