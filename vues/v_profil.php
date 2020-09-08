<?php
if ($_SESSION['user'])
{
    ?>
    <h1>Profil de <?php echo $_SESSION['user']['prenom']?></h1>
    <br>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Entreprise</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $_SESSION['user']['email']?></td>
      <td><?= $_SESSION['user']['nom']?></td>
      <td><?= $_SESSION['user']['prenom']?></td>
      <td><?= $_SESSION['user']['nom_entreprise']?></td>
    </tr>
  </tbody>
</table>

    <button type="button" class="btn btn-secondary" href="index.php?uc=administrer&action=setprofil">Modifier mon profil</button>

    <?php
}
else
{
    header('Location: index.php?uc=administrer&action=connexion');
    include("vues/v_message.php");
    $message = "Vous devez être connecter.";
}