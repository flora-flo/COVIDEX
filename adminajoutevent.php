<?php
    include_once '../Model/Evenement.php';
    include_once '../Controller/EvenementC.php';

    $error = "";

    // create user
    $event = null;


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
    <title>ADMIN EVENT</title>
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
                            <li><a href="adminevent.php" > LISTE DES  EVENEMENTS</a></li>
                             
                            <li><a href="admintype.php">LISTE DES TYPES </a></li>
                           
                            <li><a href="admincomntr.php">LISTE DES COMMENTAIRES</a></li>
                            <li><a href="admininscri.php">LES INSCRIPTIONS </a></li>

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
                    <h4 class="header-line">ajouter un evenement:</h4>  
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Display</title>
</head>
    <body>
        <button><a href="afficherEvenements.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="connexion.php" method="POST">
            <table border="1" align="center">

            <tr>
                    <td>
                        <label for="titre">TITRE:
                        </label>
                    </td>
                    <td><input type="text" name="titre" id="titre" maxlength="20"></td>
                </tr>
                <td>
                            <label for="date">Date </label></td>
                            <td><input type="date" class="form-control" name="date" id="date" ></td>
                        
                <tr>
                    <td>
                        <label for="tpe">TYPE:
                        </label>
                    </td>
                    <td><input type="text" name="tpe" id="tpe" maxlength="20"></td>
                </tr>
                 <tr>
                    <td>
                        <label for="lieu">LIEU:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="lieu" id="lieu" ">
                    </td>
                </tr>
                <tr>
                    
                       <td> <label for="descrip">DESCRIP:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="descrip" id="descrip" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nbParticip">NB_PARTICIPANT
                        </label>
                    </td>
                    <td>
                        <input type="number" name="nbParticip" id="nbParticip">
                    </td>
                </tr>
                
                <tr>
                    
                
                       <td> <input type="submit" value="Envoyer"> </td>
                        <td><input type="reset" value="Annuler" ></td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>




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
