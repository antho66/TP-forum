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
        $control =$GET['controle'];
    }

}

function getUserForm($username, $password) {
    return 'ndc: '.$username.' || mdp: '.$password;
}
echo 'ok';
 ?>