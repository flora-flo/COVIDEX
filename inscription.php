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
    <title>INSCRIPTION</title>
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

<body>

    <h3> remplir le formulaire pour s'inscrire </h3>
    
    
    
    <form action="ajoutreservation.php" method="post" name="f">
    <table>
        <tr>
            <td><label for="nom">Nom: </label></td>
            <td><input type="text" name="nom" onblur="maj1()" id="nom"></td>
        </tr> 
        <tr>
            <td><label for="prenom">Prénom: </label></td>
            <td><input type="text" name="prenom" onblur="maj2()"  id="prenom" class="form-control"></td>
        </tr> 
        <tr>
            <td>
                <label for="email">Adresse mail:
                </label>
            </td>
            <td>
                <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
            </td>
        </tr> 
        <tr>
            <td><label for="telephone">Tel: </label></td>
            <td><input type="tel" name="telephone" id="telephone" maxlength="8"></td>
        </tr>         
            <tr>
                
                <td>
                    <input type="submit" value="envoyer" onclick="verif()"> 
                    <input type="reset" value="Annuler" >
                </td>
            </tr>
        </table>
    </form>


    



</body>

</html>