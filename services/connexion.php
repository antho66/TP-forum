<?php 

$variable = $_POST;

/*
 * Alfonso: change de nom ce fichier. Ceci est un service pas un form
 * appel le connexionService.php ou loginService.php
 *
 * attention le header doit être à la fin de tous le vérification
 * que l'on effectue dans les services.
 * et toujours après un header met un die();
 *
 * tu avais un
 * header("location: ../index.php?page=formulaire&controle=success");
 *  page=formulaire   si tu rediriges vers formulaire cette page n'existe pas
 * si tu vas dans index.php dans le switch il n'y a pas de case 'formulaire':
 * je te le change à liste sujets.
 *
 * C'est ce que tu voulais, je crois.
 * */


header("location: ../index.php?page=listesujets&controle=success");
die("here");

    include '../services/connexion.php';

    //Alfonso: je pense qu'ici ce n'est pas la peine de transformer en html entities
    // plutot tu devrais faire des vérification pour voir si ce username
    // existe avec le bon mot de passe... et ensuite tu lui crée une session

    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['mdp']);
    echo 'ndc: '.$username.' || mdp: '.$password;
    //echo getUserForm($username, $password);


    //Alfonso: j'imagine que tu étais en train de vérifier ce que faisait la fonction html entities
    // bon continue le travail dans ce fichier. Bon courage
?>