<?php

session_start();


$nom = $_POST['Nom'];
$prenom =$_POST['prenom'];
$username = $_POST['username'];
$mdp =$_POST['mdp'];
$confirmemdp = $_POST['confirmemdp'];
$mail =$_POST['mail'];

if(!empty($_POST['prenom'],$_POST['nom'],$_POST['username'],$_POST['mdp'],$_POST['confirmemdp'] $_POST['mail'] )){
   


   }
else{

    $error = "veuillez remplir les champ vide"
}
   
}


if(isset($_POST['username'],$_POST['mdp'],$_POST['confirmemdp'] $_POST['mail']){
if($_POST['username'] >= 4){
    $_POST['username'] = true;
}
else($_POST['username'] < 4{
   $_POST['username'] = false;

}




}
header("location:valide.php");


    
?>


5) Donc les utilisateurs pourrons s'enregistrer, se connecter et récupérer leurs password
(on va ignorer l'envoie d'email pour l'instant)
Il faut vérifier que
- le mot de passe a au moins 8 caractères de long.
- lors de l'enregistrement il faut répéter le mot de passe pour le confirmer
- Username au moins 4 caractères de long,
- que les mail a bien la structure XX@XX.xxx .
- Il faut s'assurer que le username est unique!
