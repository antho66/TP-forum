<?php

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "login";
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
 return "Bienvenue Anthony";
}


function getFeeback(){
$control = false;
if(isset($_GET['controle'])){
    $control =$GET['controle'];
}

}



 ?>