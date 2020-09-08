<?php
if ($_SESSION['user']['id_groupe'] == 1)
{
    //var_dump($letrajet);
    //var_dump($lestrajets);
    var_dump($idTrajet);
    var_dump($newvehicule);
    var_dump($mot);
    
?>


<div class="container">
<form action="index.php?uc=administrer&action=modifytrajet&id=<?= $idTrajet ?>" method="post">
<h1 class="h2 mb-3 font-weight-normal">Modifier un trajet</h1>
        <table align="center">
        <tr>
            <td align=''>
                   <label class="badge" for="" > Adresse de départ : </label>
                   <input class="form-control" type ="text"  name ="newdepart" placeholder="<?=$letrajet['depart'];?>">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for="" > Adresse d'arrivee : </label>
                <input class="form-control" type ="text" name ="newarrivee" placeholder="<?=$letrajet['arrivee'];?>">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for="" > Véhicule : </label>
                <input class="form-control" type ="text" name ="newvehicule" placeholder="<?=$letrajet['vehicule'];?>">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for=""> Date : </label>
                <input class="form-control" type="date" id="start" name="newdate_trajet" value="" min="2020-01-01" max="2021-01-31" placeholder="<?=$letrajet['date_trajet'];?>">
            </td>
        </tr>
        <tr>
            <td align="">
                <div class="container">
                <input class="btn btn-xs btn-secondary" type="submit" name="formmodifytrajet" value="Modifier">
                </div>
            </td>
        </tr>
        </table>
</form>
</div>

<?php // Fin du if(isset(SESSION))
}
?>
