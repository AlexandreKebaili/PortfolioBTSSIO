<?php
session_start();
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;


if(!isset($_REQUEST['uc']))
{
	$uc = 'accueil';
}
else
{
	$uc = $_REQUEST['uc'];
}


switch($uc)
{
	case 'accueil':
		{
			include("vues/v_accueilP.php");
	break;

	}
	case 'apropos' :
		{
			include("vues/v_apropos.php");
		}
	break;

	case 'contact' : 
		{
			include("vues/v_contact.php");
		}
	break;

	case 'administrer' :
	{
		include("controleurs/c_administrer.php");
	break;  
	}
}


include("vues/v_pied.php") ;


?>
