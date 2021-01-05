<?php
	include "../controller/EvenementC.php";
	include_once '../Model/Evenement.php';

	$evenementC = new EvenementC();
	$error = "";
	
	if (
        isset($_POST["tpe"]) && 
		isset($_POST["titre"]) && 
        isset($_POST["date"]) &&
        isset($_POST["lieu"]) && 
        isset($_POST["descrip"]) && 
        isset($_POST["nbParticip"])
	){
		if (
            !empty($_POST["tpe"]) &&
            !empty($_POST["titre"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["lieu"]) && 
            !empty($_POST["descrip"]) && 
            !empty($_POST["nbParticip"])
        ) {
            $event = new Evenement(
                $_POST['tpe'],
                $_POST['titre'],
                $_POST['date'], 
                $_POST['lieu'],
                $_POST['descrip'],
                $_POST['nbParticip']
			);
			
            $evenementC->modifierEvenement($event, $_GET['id']);
            header('refresh:5;url=afficherEvenements.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Evenement</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherEvenements.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$event = $evenementC->recupererEvenement($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $event['id']; ?>" disabled>
					</td>
				</tr>
              
				<tr>
					<td>
						<label for="tpe">type:
						</label>
                        </td>
					<td>
						<input type="text" name="tpe" id="tpe" maxlength="20" value = "<?php echo $event['tpe']; ?>">
					</td>
				</tr>
                <tr>
					<td>
						<label for="titre">titre:
						</label>
					</td>
					<td>
						<input type="text" name="titre" id="titre" maxlength="20" value = "<?php echo $event['titre']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="number" name="date" id="date" maxlength="20" value = "<?php echo $event['date']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="lieu">lieu:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="lieu" id="lieu"  value = "<?php echo $event['lieu']; ?>">
                    </td>
                </tr>
                <tr>
                    
                  <td>  <label for="descrip">description:
                    </label></td>
                
                <td>
                    <input type="text" name="descrip" id="descrip" value = "<?php echo $event['descrip']; ?>">
                </td>
            </tr>
                <tr>
                    
                      <td>  <label for="nbParticip">NB_PARTICIPANT:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="nbParticip" id="nbParticip" value = "<?php echo $event['nbParticip']; ?>">
                    </td>
                </tr>
                
                
                <tr>
                    
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