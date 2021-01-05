<?php
    include_once '../Model/Evenement.php';
    include_once '../Controller/EvenementC.php';

    $error = "";

    // create user
    $event = null;

    // create an instance of the controller
    $eventC = new EvenementC();
    if (
        isset($_POST["tpe"]) && 
        isset($_POST["titre"]) && 
        isset($_POST["date"]) &&
        isset($_POST["lieu"]) && 
        isset($_POST["descrip"]) && 
        isset($_POST["nbParticip"])
    ) {
        if (
            !empty($_POST["tpe"]) && 
            !empty($_POST["titre"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["lieu"]) && 
            !empty($_POST["descrip"]) && 
            !empty($_POST["nbParticip"])
        ) {
            $event= new Evenement(
                $_POST['tpe'],
                $_POST['titre'],
                $_POST['date'], 
                $_POST['lieu'],
                $_POST['descrip'],
                $_POST['nbParticip']
            );
            $eventC->ajouterEvenement($event);
            header('Location:adminevent.php');
        }
        else
            $error = "Missing information";
    }

    
?>
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
        
        <form action="" method="POST">
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