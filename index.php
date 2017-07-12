<?php
		session_start();
      	include_once("model/fonction.php");
        $page = getPage(); 
//    var_dump($page);
//    die();

	switch( $page ) {

		case "nouveauposte":
		include('view/nouveauposte.php');
		break;

        case 'inscription-connection':
			include_once('view/inscription-connection.php');
			break;

        case 'listesujets':
			include_once('view/listesujets.php');
			break;   

			case 'connexion':
			include_once('services/connexionservice.php');
            break;

			case 'formulaire-valider':
			include_once('service/formvalid.php');
            break;

			case 'validation-inscription':
			include_once('view/valid-inscri.php');
			break;

		case 'wall':
			$user = getUser();
			$description = getdescription();
			include_once('view/wall.php');
			break;


		// case 'accueil':
		//   $feedback = getFeedback();
        //     include('view/accueil.php');
		// break;
		
	}
	
	?>