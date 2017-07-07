<?php
      include_once("model/fonction.php");
        $page = getPage(); 
//    var_dump($page);
//    die();

	switch( $page ) {
		case 'login':
			include_once('view/login.php');
			break;

        case 'inscription':
			include_once('view/inscription.php');
			break;

        case 'listesujets':
			include_once('view/listesujets.php');
			break;   

		// case 'wall':
		// 	$user = getUser();
		// 	$description = getdescription();
		// 	include_once('view/wall.php');
		// 	break;


		// case 'accueil':
		//   $feedback = getFeedback();
        //     include('view/accueil.php');
		// break;
		
	}
	
	?>