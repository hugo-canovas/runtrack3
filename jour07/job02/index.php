<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <header class="flex fixed w-full justify-center h-28 bg-amber-300">
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php">Inscription</a>
            <a href="index.php">Connexion</a>
            <a href="index.php">Rechercher</a>
        </nav>
    </header>
    <form action="">
        <input type="radio" name="civilite" id="monsieur" value="Monsieur">
        <label for="monsieur">Monsieur</label>
        <input type="radio" name="civilite" id="madame" value="Madame">
        <label for="madame">Madame</label>
        <label for="">Nom :</label>
        <input type="text">
        <label for="">Prénom :</label>
        <input type="text">
        <label for="">Adresse :</label>
        <input type="text">
        <input type="checkbox" name="info" id="">
        <label for="info">Informatique</label>
        <input type="checkbox" name="travel" id="">
        <label for="travel">Voyages</label>
        <input type="checkbox" name="sport" id="">
        <label for="travel">Sport</label>
        <label for="">Mot de passe :</label>
        <input type="password">
        <label for="">Confirmation de mot de passe :</label>
        <input type="password">
        <button type="submit">Valider</button>
    </form>
    <footer>
        <div>
            <a href="index.php">Accueil</a>
        </div>
        <div>
            <a href="index.php">Inscription</a>
        </div>
        <div>
            <a href="index.php">Connexion</a>
        </div>
        <div>
            <a href="index.php">Rechercher</a>
        </div>
    </footer>
</body>
</html>