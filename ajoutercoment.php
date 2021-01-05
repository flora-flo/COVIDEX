<?php
    include_once '../Model/coment.php';
    include_once '../Controller/comentC.php';

    $error = "";

    // create user
    $coment = null;

    // create an instance of the controller
    $comentC = new CommentaireC();
    if (
        
        isset($_POST["commentaire"]) 
        
    ) {
        if (
           
            !empty($_POST["commentaire"])  
            
        ) {
            $coment= new Commentaire(
               
                $_POST['commentaire']
                
            );
            $comentC->ajouterCommentaire($coment);
            header('Location:session1.php');
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