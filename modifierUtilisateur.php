<?php
	include "../controller/UtilisateurC.php";
	include_once '../Model/Utilisateur.php';

	$utilisateurC = new UtilisateurC();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["pass"])&&
        isset($_POST["adresse"]) && 
        isset($_POST["date"]) && 
        isset($_POST["tel"])
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["pass"])&&  
            !empty($_POST["adresse"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["tel"])
        ) {
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['pass'],
                $_POST['adresse'],
                $_POST['date'],
                $_POST['tel']
			);
			
            $utilisateurC->modifierUtilisateur($user, $_GET['id']);
            header('refresh:5;url=afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='4' colspan='1'>
						Fiche Personnelle
					</td>
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $user['Id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="nom">Nom:
						</label>
					</td>
					<td>
						<input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user['Nom']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user['Prenom']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['Email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    
                
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass" value = "<?php echo $user['Password']; ?>">
                    </td>
                </tr>
                
                <tr>
                <td>
						<label for="adresse">Adresse:
						</label>
					</td>
					<td>
						<input type="text" name="adresse" id="nom" maxlength="50" value = "<?php echo $user['adresse']; ?>" >
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
                                                            <option value=1>2001</option> 
                                                            <option value=2>2002</option> 
                                                            <option value=3>2003</option> 
                                                            <option value=4>2004</option> 
                                                            <option value=5>2005</option> 
                                                            <option value=6>2006</option> 
                                                            <option value=7>2007</option> 
                                                            <option value=8>2008</option> 
                                                            <option value=9>2009</option> 
                                                            <option value=10>2010</option> 
                                                            <option value=11>2011</option> 
                                                            <option value=12>2012</option> 
                                                            <option value=13>2013</option> 
                                                            <option value=14>2014</option> 
                                                            <option value=15>2015</option> 
                                                            <option value=16>2016</option> 
                                                            <option value=17>2017</option> 
                                                            <option value=18>2018</option> 
                                                            <option value=19>2019</option> 
                                                            <option value=20>2020</option> 
                                                        </select>
                        </td> 
                        </tr>
                        <tr>
                            <tr>
                                <td>
                                <label>Numéro de téléphone: </label>
                             <input type="telephone"  maxlength="8" required>
                        </td>
                        </tr>
                        </tr> 
                            
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>