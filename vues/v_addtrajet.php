<?php
if ($_SESSION['user']['id_groupe'] == 1)
{

?>


<div class="container">
<form action="index.php?uc=administrer&action=settrajet" method="post">
<h1 class="h2 mb-3 font-weight-normal">Déposer d'un trajet</h1>
        <table align="center">
        <tr>
            <td align=''>
                   <label class="badge" for="" > Adresse de départ : </label>
                   <input class="form-control" type ="text" name ="depart">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for="" > Adresse d'arrivee : </label>
                <input class="form-control" type ="text" name ="arrivee">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for="" > Véhicule : </label>
                <input class="form-control" type ="text" name ="vehicule">
            </td>
        </tr>
        <tr>
            <td align="">
                <label class="badge" for=""> Date : </label>
                <input class="form-control" type="date" id="start" name="date_trajet" value="" min="2020-01-01" max="2021-01-31">
            </td>
        </tr>
        <tr>
            <td align="">
                <div class="container">
                <input class="btn btn-xs btn-secondary" type="submit" name="formtrajet" value="Ajouter">
                </div>
            </td>
        </tr>
        </table>
</form>
</div>

<?php // Fin du if(isset(SESSION))
}
?>
