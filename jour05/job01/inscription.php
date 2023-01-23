<?php

    session_start();
    include('info.php');
    if(isset($_POST['inscription']))
    {
        $inscription = $_POST['inscription'];
    }
    $erreur ="";
    if(isset($inscription))
    {
        if(empty($nom))
        {
            $erreur = "Le champs nom est obligatoire !";
        }
        else if(empty($prenom))
        {
            $erreur = "Le champs prénom est obligatoire !";
        }
        else if(empty($email))
        {
            $erreur = "Le champs email est obligatoire !";
        }
        else if(empty($password))
        {
            $erreur = "Le champs mot de passe est obligatoire !";
        }
        else if(empty($passwordConfirm))
        { 
            $erreur = "Le champs confirmation de mot de passe est obligatoire !";
        }
        else if($password != $passwordConfirm)
        {
            $erreur = "Les mots de passe ne sont pas identique !";
        }
        else
        {
            include ('logBdd.php');
            $email_verify = $bdd->prepare("SELECT id FROM utilisateurs WHERE email=? limit 1");
            $email_verify->execute(array($email));
            $user_email = $email_verify->fetchAll();

            if(count($user_email) > 0)
            {
                $erreur = "Cet email est déjà enregistré !";
            }
            else
            {
                $request = $bdd->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (?,?,?,?)");

                if($request->execute(array($nom,$prenom, $email, md5($password))))
                {
                    // header('location:connexion.php');
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <div><?php echo $erreur ?></div>
    <form action="" method="post" name="inscriptionForm">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <label for="password">mot de passe :</label>
        <input type="password" id="password" name="password">
        <label for="passwordConfirm">confirmer mot de passe :</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm">
        <input type="submit" name="inscription" onclick="inscription()" value="Inscription">
    </form>
<script src="./script.js"></script>
</body>
</html>
