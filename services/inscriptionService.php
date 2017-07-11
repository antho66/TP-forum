<?php
session_start();

include_once("../model/fonction.php");

$nom = $_POST['nom'];
$prenom =$_POST['prenom'];
$username = $_POST['username'];
$mdp =$_POST['mdp'];
$confirmemdp = $_POST['confirmemdp'];
$mail =$_POST['mail'];

$erreur =array();
$_SESSION['erreur']=array();

// var_dump($_POST);
// die();

if(!empty($prenom) && !empty($nom) && !empty($username) &&
 !empty($mdp) && !empty($confirmemdp) && !empty($mail)){
   

    if (strlen ( $mdp ) < 8){

            $erreur[]="mdp8caractere";
    }


 if ( ($confirmemdp) != ($mdp)){
        $erreur[]="mdpnonsimilaire";
    }


    if (strlen ( $username ) < 4){
     $erreur[]="username4caractere";
   
    }

   

    

    if (filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
     
        $erreur[]="emailincorrect";
    } 
    

}
else{
    $erreur[]="champvide";
}



$_SESSION['erreur']=$erreur;


if(empty($erreur)){
    inscription($username,$mail,$mdp,$prenom,$nom);
}

// var_dump($erreur);
// die();

header("location:../index.php?page=validation-inscription");


    
?>


5) Donc les utilisateurs pourrons s'enregistrer, se connecter et récupérer leurs password
(on va ignorer l'envoie d'email pour l'instant)
Il faut vérifier que
- le mot de passe a au moins 8 caractères de long.
- lors de l'enregistrement il faut répéter le mot de passe pour le confirmer
- Username au moins 4 caractères de long,
- que les mail a bien la structure XX@XX.xxx .
- Il faut s'assurer que le username est unique!

var_dump($_POST);
die();