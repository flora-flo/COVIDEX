
<?php
include "../model/type.php";
include "../controller/typeC.php";
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
    <title> ADMIN TYPE</title>
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
                            <li><a href="adminevent.php" > LISTE DES EVENEMENTS</a></li>
                             
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
                    <h4 class="header-line">ajouter un type d'evenement:</h4>  
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
            <div>
                    <form method="post" action="ajouter_type.php">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label> idtype <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="idtype">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label> type<span class="text-danger"></span></label>
                                <input class="form-control" type="text" name="type">
                            </div>
                        </div>

                        
                        <div class="m-t-20 text-center">
                            <button type="submit" name="ajouter" class="btn btn-primary submit-btn">Ajouter types</button>
                        </div>

                    </form>
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
