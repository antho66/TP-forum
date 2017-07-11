<?php 
session_start();

include_once("../model/fonction.php");

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


    //Alfonso: je pense qu'ici ce n'est pas la peine de transformer en html entities
    // plutot tu devrais faire des vérification pour voir si ce username
    // existe avec le bon mot de passe... et ensuite tu lui crée une session

    $username = ($_POST['username']);
    $mdp = ($_POST['mdp']);
     
     if(empty($username)==false AND empty($mdp)==false){
        
        $user = connexion($username,$mdp);
        if(empty($user) == false){
            $_SESSION["user"] = $user;
            header("location: ../index.php?page=listesujets&controle=success");
            

        }
        else{
            header("location:../index.php?page=inscription-connection.php");
        }

     }



    echo 'ndc: '.$username.' || mdp: '.$mdp;
    //echo getUserForm($username, $password);
die("here");



   
?>