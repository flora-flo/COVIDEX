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
        isset($_POST["email"]) && 
        isset($_POST["pass"])&&
        isset($_POST["adresse"]) && 
        isset($_POST["date"]) && 
        isset($_POST["tel"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["pass"])&&  
            !empty($_POST["adresse"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["tel"])
       ) {
         {
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['pass'],
                $_POST['adresse'],
                $_POST['date'],
                $_POST['tel']
                
            );
            $userC->ajouterUtilisateur($user);
            header('Location:afficherUtilisateurs.php');
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
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
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
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass">
                    </td>
                </tr>
                
                <tr>
                    <td>
                    <label>Adresse </label>
                       <input type="text" id="pwd" name="pwd">
                    </td>
                        </tr>
                        <tr>
                           <td>
                           <p><label for="date"> Date de naissance: </label>
                                                        <select name="jour">
                                                            <option value=1>01</option> 
                                                            <option value=2>02</option> 
                                                            <option value=3>03</option> 
                                                            <option value=4>04</option> 
                                                            <option value=5>05</option> 
                                                            <option value=6>06</option> 
                                                            <option value=7>07</option> 
                                                            <option value=8>08</option> 
                                                            <option value=9>09</option> 
                                                            <option value=10>10</option> 
                                                            <option value=11>11</option> 
                                                            <option value=12>12</option> 
                                                            <option value=13>13</option> 
                                                            <option value=14>14</option> 
                                                            <option value=15>15</option> 
                                                            <option value=16>16</option> 
                                                            <option value=17>17</option> 
                                                            <option value=18>18</option> 
                                                            <option value=19>19</option> 
                                                            <option value=20>20</option> 
                                                            <option value=21>21</option>
                                                            <option value=22>22</option> 
                                                            <option value=23>23</option> 
                                                            <option value=24>24</option> 
                                                            <option value=25>25</option> 
                                                            <option value=26>26</option> 
                                                            <option value=27>27</option> 
                                                            <option value=28>28</option>
                                                            <option value=29>29</option> 
                                                            <option value=30>30</option> 
                                                            <option value=31>31</option> </select> 
                                                        <select name="mois">
                                                        <option value=janvier>01</option> 
                                                        <option value=fevrier>02</option> 
                                                        <option value=mars>03</option> 
                                                        <option value=avril>04</option> 
                                                        <option value=mai>05</option> 
                                                        <option value=juin>06</option> 
                                                        <option value=juillet>07</option> 
                                                        <option value=aout>08</option> 
                                                        <option value=septembre>09</option> 
                                                        <option value=octobre>10</option> 
                                                        <option value=novembre>11</option> 
                                                        <option value=decembre>12</option> 
                                                        </select>
                                                        <select name="année">
                                                            <option value=1>1985</option> 
                                                            <option value=2>1986</option> 
                                                            <option value=3>1987</option> 
                                                            <option value=4>1988</option> 
                                                            <option value=5>1989</option> 
                                                            <option value=6>1990</option> 
                                                            <option value=7>1991</option> 
                                                            <option value=8>1992</option> 
                                                            <option value=9>1993</option> 
                                                            <option value=10>1994</option> 
                                                            <option value=11>1995</option> 
                                                            <option value=12>1996</option> 
                                                            <option value=13>1997</option> 
                                                            <option value=14>1998</option> 
                                                            <option value=15>1999</option> 
                                                            <option value=16>2000</option> 
                                                            <option value=17>2001</option> 
                                                            <option value=18>2002</option> 
                                                            <option value=19>2003</option> 
                                                            <option value=20>2004</option> 
                                                        </select>
                        </td> 
                        </tr>
                        <tr>
                            <tr>
                                <td>
                                <label>Numéro de téléphone: </label>
                             <input type="telephone"  maxlength="8" value = "<?php echo $user['tel']; ?>" >
                        </td>
                        </tr>
                        </tr> 
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>