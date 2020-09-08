<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application HtAuto (adaptation du cas lafleur)
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoHtAuto
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=espace_membre';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoHtAuto = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoHtAuto::$monPdo = new PDO(PdoHtAuto::$serveur.';'.PdoHtAuto::$bdd, PdoHtAuto::$user, PdoHtAuto::$mdp); 
			PdoHtAuto::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoHtAuto::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoHtAuto = PdoHtAuto::getPdoHtAuto();
 * @return l'unique objet de la classe PdoHtAuto
 */
	public  static function getPdoHtAuto()
	{
		if(PdoHtAuto::$monPdoHtAuto == null)
		{
			PdoHtAuto::$monPdoHtAuto=new PdoHtAuto();
		}
		return PdoHtAuto::$monPdoHtAuto;  
	}
/**
 * Retourne toutes les types sous forme d'un tableau associatif
 *
 * @return le tableau associatif des types 
*/
	// public function getLesTypes()
	// {
	// 	$req = "select * from type";
    //             $res=  self::$monPdo->query($req);
	// 	$lesLignes = $res->fetchAll();
	// 	return $lesLignes;
	// }
/**
 * Retourne l'utilisateur connecté sous forme d'un tableau associatif
 *
 * @return l'utisateur 
*/        
    public function getUser($email,$pass)
        {
            $req = "SELECT * FROM utilisateurs WHERE email = '" . $email . "' and pass = '" . $pass . "'";
            $res =  self::$monPdo->query($req);
            $ligne= $res->fetch();
            return $ligne;
        }
    
    public function getProfil()
    {
        $id = $_SESSION['user']['id'];
        $req = "SELECT * FROM utilisateurs WHERE id ='".$id."'";
        $res = self::$monPdo->query($req);
        $ligne= $res->fetch();
        
        return $ligne;
    }

    public function getPrenom($email, $pass)
    {
        $req = "SELECT prenom FROM utilisateurs WHERE email = '" . $email . "' and pass = '" . $pass . "'";
        $res =  self::$monPdo->query($req);
        $ligne= $res->fetch();
        return $ligne['prenom'];
    }

    public function setUser()
    {
        $req = "INSERT INTO utilisateurs(id_groupe, nom, prenom, email, pass, date_inscription) VALUES(?, ?, ?, ?, ?, NOW())";
        $res = self::$monPdo->prepare($req);
        $ligne = $res->execute(array('2', $_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['pass']));
    }

    public function setTrajet()
    {
        $req = "INSERT INTO trajets(depart, arrivee, vehicule, date_trajet) VALUES (?,?,?,?)";
        $res = self::$monPdo->prepare($req);
        $ligne = $res->execute(array($_REQUEST['depart'],$_REQUEST['arrivee'],$_REQUEST['vehicule'],$_REQUEST['date_trajet']));
    }

    public function getTrajets()
    {
        $req = "select * from  trajets";
        $res=  self::$monPdo->query($req);
        $lesTrajets = $res->fetchAll();
        return $lesTrajets;
    }

    public function getletrajet($id)
    {
        $req = "SELECT * FROM trajets WHERE id = '" . $id . "'";
        $res =  self::$monPdo->query($req);
        $letrajet= $res->fetch();
        
        return $letrajet;
    }

/**
 * Retourne la voiture sous forme d'un tableau associatif à partir de son 
 * numéro d'immatriculation
 * 
 * @param $numImma 
 * @return la voiture   
*/

	// public function getLaVoiture($numImma)
	// {
    //     $req="select voiture.numImma as numImma, voiture.couleur as couleur, 
    //     voiture.prix as prix, voiture.image as image, type.libelle as type,
    //     marque.libelle as marque, voiture.annee as annee
    //     from voiture, type, marque where voiture.visible = 1 and 
    //     voiture.idType = type.id and voiture.idMarque = marque.id
    //     and voiture.numImma = '" . $numImma . "'";
              
	// 	$res=  self::$monPdo->query($req);
	// 	$laLigne = $res->fetch();
	// 	return $laLigne; 
	// }
/**
 * Retourne les voitures d'une marque sous forme d'un tableau associatif à partir de  
 * l'id de la marque
 * 
 * @param l'id de la marque 
 * @return les voitures   
*/
        
        // public function getLesVoituresUneMarque($laMarque)
        // {
        //     $req = "select voiture.annee as annee,
        //     marque.libelle as marque, type.libelle as type ,
        //     voiture.couleur as couleur, voiture.image as image,
        //     voiture.prix as prix 
        //     from voiture, marque , type
        //     where voiture.visible = 1 
        //     and voiture.idMarque = marque.id
        //     and voiture.idType = type.id
        //     and  voiture.idMarque = ". $laMarque ;
        //     $res =  self::$monPdo->query($req);
        //     $lesVoitures = $res->fetchAll();
        //     return $lesVoitures;
        // }
/**
 * Retourne toutes les voitures sous forme d'un tableau associatif 
 * 
 * @param 
 * @return les voitures   
*/       
        // public function getLesVoitures()
        // {
        //     $req="select voiture.numImma as numImma, voiture.annee as annee,
        //     marque.libelle as marque, type.libelle as type ,
        //     voiture.couleur as couleur, voiture.image as image, voiture.prix as prix 
        //     from voiture, marque , type
        //     where voiture.visible = 1 
        //     and voiture.idMarque = marque.id
        //     and voiture.idType = type.id  order by marque";
        //     $res=  self::$monPdo->query($req);
        //     $lesVoitures = $res->fetchAll();
        //     return $lesVoitures;
        // }
/**
 * Retourne les voitures d'un type sous forme d'un tableau associatif à partir de  
 * l'id du type
 * 
 * @param l'id du type 
 * @return les voitures   
*/        
        // public function getLesVoituresUnType($leType)
        // {
        //     $req="select voiture.annee as annee,
        //     marque.libelle as marque, type.libelle as type ,
        //     voiture.couleur as couleur, voiture.image as image,
        //     voiture.prix as prix 
        //     from voiture, marque , type
        //     where voiture.visible = 1 
        //     and voiture.idMarque = marque.id
        //     and voiture.idType = type.id
        //     and  voiture.idType = ". $leType ;
        //     $res=  self::$monPdo->query($req);
        //     $lesVoitures = $res->fetchAll();
        //     return $lesVoitures;
        // }
/**
 * Retourne toutes les marques sous forme d'un tableau associatif
 *
 * @return le tableau associatif des marques 
*/
        // public function getLesMarques()
        // {
        //     $req = "select * from  marque";
        //     $res=  PdoHtAuto::$monPdo->query($req);
		//     $lesLignes = $res->fetchAll();
		//     return $lesLignes;
        // }
/**
 * enregistre une nouvelle voiture
 * @param les champs d'une voiture 
 * @return une valeur pouvant être interprétée 
*/
        // public function ajouterVoiture($numImma, $marque, $type, $annee , $prix, $couleur, $photo)
        // {
        //     $req = "insert into voiture (numImma,idMarque,idType,annee,prix,couleur,image,visible) VALUES ('$numImma','$marque','$type',$annee,'$prix','$couleur','$photo',1)";
        //     $res=  PdoHtAuto::$monPdo->exec($req);
        //     return $res;
           
        // }
/**
 * modifie une voiture
 * @param les champs maj d'une voiture 
 * @return une valeur pouvant être interprétée 
*/
        // public function modifierVoiture($numImma, $couleur, $photo, $prix)
        // {
                       
        //     $req ="update voiture set couleur = '$couleur',  prix = $prix " ;
        //     if($photo != '')
        //         $req .= ", image = '$photo' ";
        //     $req .= "where numImma = '$numImma'";    
        //     $res=  PdoHtAuto::$monPdo->exec($req);
        //     return $res;
        //     }
/**
 * rend non visible une voiture dans le catalogue
 * @param le numéro d'immatriculation d'une voiture 
 * @return une valeur pouvant être interprétée 
*/
           
        // public function supprimerVoiture($numImma)
        // {
        //     $req = "update voiture set visible = 0 where numImma = '" . $numImma . "'";
        //     $res = PdoHtAuto::$monPdo->exec($req);
        //     return $res;
        // }


/**
 * ajoute une nouvelle marque de voiture
 * @param le libellé de la marque 
 * @return une valeur pouvant être interprétée 
*/
// public function ajouterMarque($libMarque)
// {
//     $req = "insert into marque (id, libelle) values (null,'$libMarque')";
//     $res = PdoHtAuto::$monPdo->exec($req);
//     return $res;
// }
    } // fin classe 
?>
