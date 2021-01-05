

<?php
    include_once '../Model/Utilisateur.php';
    include_once '../Controller/UtilisateurC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new UtilisateurC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"])  &&
        isset($_POST["telephone"])
        
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"])  &&
            !empty($_POST["telephone"])  
           
        ) {
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['telephone']
              
            );
            $userC->ajouterUtilisateur($user);
            header('Location:profil.php');
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
    <script language='javascript' src="controle.js">
  </script>
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="post" name="f">
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
                    <input type="email" name="email" id="email" pattern=".+@gmail.com">
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