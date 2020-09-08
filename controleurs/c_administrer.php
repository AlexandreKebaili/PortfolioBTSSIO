<?php
$action = $_REQUEST['action'];
switch ($action)
{
    case 'connexion' :
        include("vues/v_bandeau.php") ;
        include("vues/v_connexion.php");
    break;

    case 'accueil':
        include("index.php");
        break;

    case 'btssioslam':
        include("vues/v_btssioslam.php");
        break;

    case 'apropos':
        include("vues/v_apropos.php");
        break;

    case 'curriculumvitae':
        include("http://localhost/CV_Bootstrap/CV_Bootstrap/");
        break;
    
    case 'glpi':
        include("vues/v_glpi.php");
        break;

    case 'glpiexpo' : 
        include('vues/v_glpiexpo.php');
        break;

    case 'veille':
        include("vues/v_veille.php");
        break;

    case 'stage1': 
        include("vues/v_stage1.php");
        break;    

    case 'csvexpo' : 
        include("vues/v_CSVexpo.php");
    break;

    case 'stage1expo1' : 
        include("vues/v_stage1expo1.php");
    break;

    case 'stage1expo2' : 
        include("vues/v_stage1expo2.php");
    break;

    case 'stage2' : 
        include("vues/v_stage2.php");
    break;

    case 'ppe' : 
        include("vues/v_ppe.php");
    break;

    case 'ppeexpo' : 
        include("vues/v_ppeexpo.php");
    break;

    case 'ppeexpo1' : 
        include("vues/v_ppeexpo1.php");
    break;

    case ('ppeexpo2') : 
        include("vues/v_ppeexpo2.php");
    break;

    case 'ppeexpo3': 
        include("vues/v_ppeexpo3.php");
    break;
    
    case 'contact': 
        include("vues/V_contact.php");
    break;

    case 'test' : 
        include("vues/text_test.php");
    break;
    
        case 'inscription' :
        include('vues/v_inscription.php');
    break;
    
    case 'deconnexion' :
        include("vues/v_deconnexion.php");
    break;

    case 'apropos' :
        include("vues/v_apropos.php");
    break;

    case 'profil' : 
        include("vues/v_profil.php");
    break;
    
    case 'setprofil' :
        if (isset($_POST['formsetprofil']))
        {
        }
        $profil = $pdo->getProfil();
        include("vues/v_setprofil.php");
        $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');
        
        $idprofil = $profil['id'];
        $newemail = $_POST['email'];
        $newnom = $_POST['nom'];
        $newprenom = $_POST['prenom'];
        $newentreprise = $_POST['entreprise'];
        $newpass = $_POST['pass'];
        $newpass2 = $_POST['pass2'];

        if ($newpass == $newpass2)
        {
            $reqemail = $bdd->query("UPDATE trajets set nom='$newnom', prenom='$newprenom', email='$newemail', pass = '$newpass' where id='$idprofil'");
        }
        
        


    break;
     
    case 'sendcontact' : 
        if(isset($_POST['formcontact']))
        {
                if (!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['sujet']) AND !empty($_POST['message']))
                {
                    $email = $_POST['email'];
                    $to = 'kebalex@hotmail.fr';
                    $nom = $_POST['nom'];
                    $sujet = $_POST['sujet'];
                    $message = $_POST['message'];

                    $sujetlenght = strlen($sujet);

                    if ($sujetlenght < 255)
                    {
                        mail($to, $sujet, $message, $email);
                        include("vues/V_contact.php");
                        ?>
                        <div class="alert alert-primary" role="alert">
                            Le message est parti !
                        </div>
                        <?php
                    }
                    else
                    {
                        include("vues/V_contact.php");
                        ?>
                        <div class="alert alert-primary" role="alert">
                            Votre sujet est trop grand.
                        </div>
                        <?php
                    }

                }
                else
                {
                    include("vues/V_contact.php");
                    ?>
                        <div class="alert alert-primary" role="alert">
                            Tous les champs doivent être remplis.
                        </div>
                        <?php
                }
            

        }
    break;

    case 'controleinscription' :
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pass = sha1($_POST['pass']);
        $pass2 = sha1($_POST['pass2']);
        $emaillength = strlen($email);
        $entreprise = $_POST['entreprise'];

        if (!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pass']) AND !empty($_POST['pass2']))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');

            $reqemail = $bdd->prepare("SELECT * FROM utilisateurs where email = ?");
            $reqemail -> execute(array($email));
            $emailexist = $reqemail->rowCount();

            if ($emaillength <= 255)
            {
                if ($emailexist == 0)
                {
                    if ($pass == $pass2)
                    {
                        $user = $pdo->setUser();
                        $_SESSION['user'] = $user;

                        header("Location: index.php?uc=administrer&action=profil");
                    }
                    else
                    {
                        include("vues/v_inscription.php");
                    $message = "Les mots de passe doivent être les mêmes    .";
                    include("vues/v_message.php");
                    }
                }
                else
                {
                    include("vues/v_inscription.php");
                    $message = "Adresse email deja existante.";
                    include("vues/v_message.php");
                }
            }
            else
            {
                include("vues/v_inscription.php");
                $message = "La taille de votre adresse email est trop grande.";
                include("vues/v_message.php");
            }
        }
        else
        {
            include("vues/v_inscription.php");
            $message = "Tous les champs doivent être remplis.";
            include("vues/v_message.php");
        }
    break;

    case 'controler':
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $user = $pdo->getUser($email,$pass);
        if($user == null){
            include("vues/v_connexion.php");
            $message = "Erreur de login et/ou de mot de passe ";
            include("vues/v_message.php");
        }
        else
        {
            $_SESSION['user'] = $user;
            include ('vues/v_profil.php');   
        }
    break;

    case 'addtrajet' :
        include('vues/v_addtrajet.php');
    break;

    case 'settrajet' :
        
        if (!empty($_POST['depart']) AND !empty($_POST['arrivee']) AND !empty($_POST['vehicule']) AND !empty($_POST['date_trajet']))
        {
            $depart = $_POST['depart'];
            $arrivee = $_POST['arrivee'];
            $vehicule = $_POST['vehicule'];
            $date = $_POST['date_trajet'];

            if (isset($_POST['depart']) AND isset($_POST['arrivee']) AND isset($_POST['vehicule']) AND isset($_POST['date_trajet']))
            {
                $pdo->setTrajet();
                include("vues/v_addtrajet.php");
                $message = "Trajet enregistré.";
                include("vues/v_message.php");
            }
            else
            {
                
            }
        }
        else
        {
            include("vues/v_addtrajet.php");
            $message = "Tous les champs doivent être remplis.";
            include("vues/v_message.php");
        }
    break;

    case 'voirtrajets' :
            $lestrajets = $pdo->getTrajets();
            include('vues/v_voirtrajets.php');
    break;

    case 'modifytrajet' : 

        $lestrajets = $pdo->getTrajets();
        $idTrajet = $_REQUEST['id'];
        $letrajet = $pdo->getletrajet($idTrajet);

        if (!isset($_POST['formmodifytrajet']))
        {
            $mot = 'Le formulaire est d\'origine';
            include('vues/v_modifytrajet.php');
        }
        else
        {
            $mot = 'Le formulaire à été changer';
            $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');

            $newdepart = $_POST['newdepart'];
            $newarrivee = $_POST['newarrivee'];
            $newvehicule = $_POST['newvehicule'];
            $newdate_trajet = $_POST['newdate_trajet'];
            
            //$reqemail = $bdd->query("UPDATE trajets set vehicule='$newvehicule', date_trajet='$newdate_trajet', arrivee='$newarrivee', depart = '$newdepart' where id='$idTrajet'");
            
            //$reqemail = $bdd->prepare("UPDATE trajets set depart = ?, arivee= ?, vehicule= ?, date_trajet= ? where id = ?");
            // $reqemail -> execute(array($newdepart, $newarrivee, $newvehicule, $newdate_trajet, $idTrajet));
            
            $req = $bdd->prepare('UPDATE trajets SET depart = :depart, arrivee = :arrivee, vehicule = :vehicule, date_trajet = :date_trajet WHERE id = :id');
            
            $req->execute(array(
            'depart' => $newdepart,
            'arrivee' => $newarrivee,
            'vehicule' => $newvehicule,
            'date_trajet' => $newdate_trajet,
            'id' => $idTrajet
            ));
            
            header("Location: index.php?uc=administrer&action=modifytrajet&id=$idTrajet");

        }
    break;

    case 'choisirtajet' : 
        include('vues/v_choisirtrajet.php');
    break;

}