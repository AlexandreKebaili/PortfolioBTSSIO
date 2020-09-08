<h1 class="h2 mb-3 font-weight-normal">Liste des trajets</h1>
<div class="container">
<?php
foreach($lestrajets as $letrajet)
{
    $idTrajet = $letrajet['id'];
    ?>
    <div class="container">
            <ul>
                <div class="jumbotron bg-light text-gray">
                    <table class="table table-hover">
                        <h1 class="h3 mb-3 font-weight-normal">Trajet n°<?= $letrajet['id'] ?></h1>
                        <thead>
                            <tr>
                                <th scope="col">Depart</th>
                                <th scope="col">Arrivée</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type véhicule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p class="lead"> <?= $letrajet['depart']?></p></td>
                                <td><p class="lead"> <?= $letrajet['arrivee']?></p></td>
                                <td><p class="lead"> <?= $letrajet['date_trajet']?></p></td>
                                <td><p class="lead"> <?= $letrajet['vehicule']?></p></td>
                            </tr>
                        </tbody>
                    </table>
        
    <?php
    if ($_SESSION['user']['id_groupe'] == 1)
    {
    ?>
            <p class="lead">
                <a class="btn btn-primary btn-xs" role="button" href="index.php?uc=administrer&action=modifytrajet&id=<?= $idTrajet ?>">Modifier</a>
            </p>
        </ul>
    </div>
    <?php
    }
    if ($_SESSION['user']['id_groupe'] == 2)
    {
    ?>
    <p class="lead">
                <a class="btn btn-primary btn-xs" role="button" href="index.php?uc=administrer&action=choisirtrajet">Choisir</a>
            </p>
        </ul>
    </div>
    <?php
    }
}
?>
</div>