<?php

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "inscription-connection";
  }
  return $page;
}

function getUser(){
    // des appel de base de donees
    // dans notre exmple nous créeon des donner manuellement
    $user = ["Anthony","tony66440@hotmail.fr"];
 return $user;
}

function getdescription(){
    // des appel de base de donees
 return "Bienvenue sur ton profil Anthony";
}

function getFeeback(){
    $control = false;
    if(isset($_GET['controle'])){
        $control =$_GET['controle'];
    }

}

function getUserForm($username, $password) {
    return 'ndc: '.$username.' || mdp: '.$password;
}


function inscription($username,$email,$mdp,$prenom,$nom){
    $connexion = new PDO ('mysql:host=localhost;dbname=tp-forum;charset=UTF8','root','root');

    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);



    $pdo = $connexion->prepare('INSERT INTO user SET username=:username, email=:email,
     mdp=:motdepasse,nom=:nom,prenom=:prenom,datecreate=NOW()');

    $pdo->execute(array(
    'username'=> $username,
    'email'=>$email,
    'motdepasse'=> $mdp,
    'prenom'=> $prenom,
    'nom'=> $nom,
    ));
    $result = $pdo->rowcount();

}   


    function connexion($username,$mdp){
     $connexion = new PDO ('mysql:host=localhost;dbname=tp-forum;charset=UTF8','root','root');

    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);


    $pdo = $connexion->prepare ('SELECT * FROM user WHERE  username=:username AND mdp=:motdepasse ');
            $pdo -> execute(array(
        'motdepasse' => $mdp,
        'username' => $username,
            ));

    $user = $pdo -> fetchAll(PDO::FETCH_ASSOC);
    return $user;

    }
