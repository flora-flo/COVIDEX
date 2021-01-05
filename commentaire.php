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
    <title>COMMENTAIRE</title>
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
    <?php 
    include_once '../Model/coment.php';
    include_once '../Controller/comentC.php';
    
    $error = "";
?>
    
        
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Display</title>
</head>
    <body>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="ajoutercoment.php" method="POST">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" border=1 align = 'center'>
                
                <tr>
                    
                        <label for="commentaire">COMMENTAIRE:
                        </label>
                    
                    
                        <textarea name="commentaire" id="commentaire" cols="50" rows="20" ></textarea>
                
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>