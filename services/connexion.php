<?php 

$variable = $_POST;

header("location: ../index.php?page=formulaire&controle=success");

    include '../services/connexion.php';

    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['mdp']);
    echo 'ndc: '.$username.' || mdp: '.$password;
    //echo getUserForm($username, $password);

?>