<?php

    session_start();
    include('info.php');
    if(isset($_POST['connexion']))
    {
        $connexion = $_POST['connexion'];
    }
    $erreur ="";
    if(isset($connexion))
    {
        include('logBdd.php');
        $verify = $bdd->prepare("SELECT * FROM utilisateurs WHERE email=? AND password=? limit 1");
        $verify->execute(array($_POST['email'], md5($_POST['password'])));
        $user = $verify->fetchAll(PDO::FETCH_ASSOC);
        $user_json = $user;
        $user_json = json_encode($user_json);
        file_put_contents('script.json', $user_json);
        
        if(count($user) > 0)
        {
            $_SESSION['prenom']= ucfirst(strtolower($user[0]['prenom']));
            $_SESSION['nom']= ucfirst(strtolower($user[0]['nom']));
            $_SESSION['login'] = true;
            header('location:index.php');
        }
        else
        {
            $erreur = "Mauvais Email ou mot de passe !";
        }
    }   
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <div><?php echo $erreur ?></div>
    <form action="" method="post">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
        <label for="">Mot de passe :</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="connexion" value="Connexion">
    </form>

</body>
</html>