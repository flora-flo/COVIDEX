<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Archivo:100,300,400,400italic,500,600,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Days+One:100,300,400,400italic,500,600,700,700italic'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>

    <!-- CSS -->
    <link rel='stylesheet' href='./css/global.css'>
    <link rel='stylesheet' href='./css/structure.css'>
    <link rel='stylesheet' href='./css/medicalshop.css'>
    <link rel='stylesheet' href='./css/custom.css'>

</head>

<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: cnx.php');
   }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Utilisateur</title>
</head>
<body>

<?php
// Il est bien connecté
echo '<h1>votre inscription a bien été enregistrée<h1> ', $_SESSION['e'];
?>

</body>
</html>