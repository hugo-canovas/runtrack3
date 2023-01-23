<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>

<?php

    if(!isset($_SESSION['prenom']))
    {
        $welcome = "Veuillez vous inscrire ou vous connecter pour accéder à cette page.";
?>
        <h1>Veuillez vous inscrire ou vous connecter pour accéder à cette page.</h1>
        <p>Pas encore enregistré ?<a href="./inscription.php">Inscription</a></p>
        <p>Déjà connecté ?<a href="./connexion.php">Connexion</a></p>
<?php
    }
    else
    {
        if(date('H') < 18)
        {
            $welcome = "Bonjour et bienvenue ".$_SESSION['prenom'].' '.$_SESSION['nom'];
        }
        else
        {
            $welcome = "Bonsoir et bienvenue ".$_SESSION['prenom'].' '.$_SESSION['nom'];
        }
?>
        <h1><?php echo $welcome ?></h1>
        <a href="deconnexion.php">Déconnexion</a>
<?php
    }

?>
<script src="./script.js"></script>
    

    


    
</body>
</html>