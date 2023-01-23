<?php 
    if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['passwordConfirm']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['passwordConfirm'];
        $password_crypt = md5($_POST['password']);
    }
    

?>