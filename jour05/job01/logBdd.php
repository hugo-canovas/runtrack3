<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
    }catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

?>