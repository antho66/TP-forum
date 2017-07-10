<?php
      include_once("model/fonction.php");
        $page = getPage(); 
//    var_dump($page);
//    die();

	switch( $page ) {

        case 'inscription-connection':
			include_once('view/inscription-connection.php');
			break;

        case 'listesujets':
			include_once('view/listesujets.php');
			break;   

			case 'connexion':
			include_once('view/connexion.php');
            break;

			case 'formulaire-valider':
			include_once('view/formvalid.php');
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