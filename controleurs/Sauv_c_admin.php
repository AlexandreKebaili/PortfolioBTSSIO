<!-- case 'liste':
        if(isset($_SESSION['admin'])){
            $lesVoitures=$pdo->getLesVoitures();
            include ('vues/v_listeVoituresAdmin.php');    

        }
        else{
            include("vues/v_connexion.php");   
    }
    break;
    case 'modifier':
        if(isset($_SESSION['admin'])){
            $numImma = $_REQUEST['numImma'];
            $voiture = $pdo->getLaVoiture($numImma);
            $couleur = $voiture['couleur'];
            $marque = $voiture['marque'];
            $type = $voiture['type'];
            $prix = $voiture['prix'];
            $annee = $voiture['annee'];
            $image = $voiture['image'];
            include("vues/v_modification.php");
        }
        else{
            include("vues/v_connexion.php");   
        }
        break;
    case 'enregModification' :
        if(isset($_SESSION['admin'])){
            $prix = $_REQUEST['prix'];
            $image = $_REQUEST['image'];
            $couleur = $_REQUEST['couleur'];
            $numImma = $_REQUEST['numImma'];
            $res = $pdo->modifierVoiture($numImma, $couleur, $image, $prix); 
            if($res != 0)
                    $message = "Mise à jour effectuée";
            else
                    $message = "Veuillez réessayer plus tard";
            include("vues/v_message.php");
            echo "<br><a href='index.php?uc=administrer&action=liste'>Retour à la liste des voitures</a>";
           
        }
        else{
            include("vues/v_connexion.php");   
        }
        break;
    case 'supprimer' :
        if(isset($_SESSION['admin'])){
            $numImma = $_REQUEST['numImma'];
            $res = $pdo->supprimerVoiture($numImma);
            if($res != 0)
                $message = "Suppression effectuée";
            else
                $message = "Veuillez réessayer plus tard";
            include("vues/v_message.php");
            echo "<br><a href='index.php?uc=administrer&action=liste'>Retour à la liste des voitures</a>";
        }
        else{
            include("vues/v_connexion.php");   
        }
        break;
    case 'ajouter' :
        if(isset($_SESSION['admin'])){
            $LesMarques = $pdo->getLesMarques();
            $LesTypes = $pdo->getLesTypes();
            $valNumImma = "";
            $valPrix = "";
            $valCouleur = "";
            $valAnnee = ""; 
            include("vues/v_ajout.php"); 
         }
        else{
            include("vues/v_connexion.php");   
        }  
        break;
    case 'enregAjout' :
        if(isset($_SESSION['admin'])){
            $prix = $_REQUEST['prix'];
            $image = $_REQUEST['photo'];
            $couleur = $_REQUEST['couleur'];
            $annee = $_REQUEST['annee'];
            $numImma = $_REQUEST['numImma'];
            $marque = $_REQUEST['marque'];
            $type = $_REQUEST['type'];
            $res = $pdo->ajouterVoiture($numImma,$marque,$type,$annee,$prix,$couleur,$image);
            if($res != 0)
                $message = "Voiture ajoutée";
            else
                $message = "Veuillez réessayer plus tard";
            include("vues/v_message.php");
            echo "<br><a href='index.php?uc=administrer&action=liste'>Retour à la liste des voitures</a>";
         }
        else
            include("vues/v_connexion.php");   
            
        break;
    
    case 'ajouterMarque' :
        if(isset($_SESSION['admin']))
            include("vues/v_ajoutMarque.php");
        else
            include("vues/v_connexion.php");   
        break;
    case 'enregMarque' :
        if(isset($_SESSION['admin'])){
            $marque = $_REQUEST['marque'];
            $res = $pdo->ajouterMarque($marque);
            if($res != 0)
                 $message = "Nouvelle marque ajoutée";
            else
                $message = "Veuillez réessayer plus tard";
            include("vues/v_message.php");
            echo "<br><a href='index.php?uc=administrer&action=liste'>Retour à la liste des voitures</a><br>";
        }
        else
            include("vues/v_connexion.php");  
        break; -->


        <?php
 
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "test@votredomaine.com";
 
    $to = "adressedestinataire";
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
    echo "L'email a été envoyé.";
?>