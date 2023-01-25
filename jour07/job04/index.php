<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <header class="flex fixed w-full justify-center items-center h-28 bg-amber-300 top-0">
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php">Inscription</a>
            <a href="index.php">Connexion</a>
            <a href="index.php">Rechercher</a>
        </nav>
    </header>
    <div class="flex justify-center mt-48 h-96">
        <div class="border rounded-3xl w-1/3">
            <form action="" class="flex flex-col w-full h-full justify-center">
                <div class="flex justify-around h-20 bg-teal-400 rounded-t-3xl">
                    <div class="flex gap-4 items-center">
                        <label for="monsieur"><i class="fa-solid fa-child text-2xl"></i></label>
                        <input type="radio" name="civilite" id="monsieur" value="Monsieur">
                    </div>
                    <div class="flex gap-4 items-center">
                        <label for="madame"><i class="fa-solid fa-child-dress text-2xl"></i></label>
                        <input type="radio" name="civilite" id="madame" value="Madame">
                    </div>
                </div>    
                <hr>               
                <input type="text" id="name" class="h-14" placeholder="Nom">                
                <input type="text" id="surname" class="h-14" placeholder="Prénom">
                <div class="flex items-center">
                    <label for="home"><i class="fa-solid fa-house text-2xl"></i></label>
                    <input type="text" id="home" class="h-14 w-full">
                </div>
                <div class="flex justify-around w-full">
                    <div class="flex gap-4">
                        <input type="checkbox" name="info" id="info">
                        <label for="info"><i class="fa-solid fa-laptop text-2xl"></i></label>
                    </div>
                    <div class="flex gap-4">
                        <input type="checkbox" name="travel" id="travel">
                        <label for="travel"><i class="fa-solid fa-plane text-2xl"></i></label>
                    </div>
                    <div class="flex gap-4">
                        <input type="checkbox" name="sport" id="sport">
                        <label for="sport"><i class="fa-solid fa-futbol text-2xl"></i></label>
                    </div>
                </div>
                <input type="password" id="password" class="h-14" placeholder="Mot de passe">               
                <input type="password" id="passwordConf"class="h-14" placeholder="Confirmez mot de passe">
                <button type="submit" class="bg-green-400 h-14 rounded-b-3xl">Valider</button>
            </form>
        </div>
    </div>
    <footer class="flex w-full justify-center bottom-0 fixed bg-amber-300">
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