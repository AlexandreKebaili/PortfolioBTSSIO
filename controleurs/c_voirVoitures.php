<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirMenu':
	    $LesTypes = $pdo->getLesTypes();
        $LesMarques = $pdo->getLesMarques();
		include("vues/v_voirMenu.php");
  		break;
	case 'voirParMarque' :
	    $laMarqueS = $_POST['marque'];
        $LesMarques = $pdo->getLesMarques();//récupération des marques
        $LesTypes = $pdo->getLesTypes();// récupération des types
        include("vues/v_voirMenu.php"); // appel à la vue pour affichages des listes : type et marque
        $LesVoituresM = $pdo->getLesVoituresUneMarque($laMarqueS);// récupération des voitures 
        include("vues/v_parMarque.php");// appel à la vue pour affichage des voitures
		break;
	case 'voirParType' :
        $leTypeS=$_POST['type'];
        $LesMarques = $pdo->getLesMarques();
        $LesTypes = $pdo->getLesTypes();
        $LesVoituresT = $pdo->getLesVoituresUnType($leTypeS);
        include("vues/v_voirMenu.php");
        include("vues/v_parType.php");
        break;
}
?>
