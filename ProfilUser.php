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
<button><a href="dcnx.php">Déconnecter</a></button>
<hr>
<?php
// Il est bien connecté
echo '<h1>votre inscription a bien été enregistrée<h1> ', $_SESSION['e'];
?>
</body>
</html>