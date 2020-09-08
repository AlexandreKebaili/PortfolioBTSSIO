<?php
if (isset($_SESSION['user']))
{
    var_dump($newnom);
?>
<div class="container">
    <form action="index.php?uc=administrer&action=setprofil" method='post'>
        <h1 class="h2 mb-3 font-weight-normal">Modifier mon profil</h1>
            <table align="center">
                <tr>
                    <td>
                        <label class="badge" for="">Email : </label>
                        <input class="form-control" type="email" name="email" placeholder='<?= $_SESSION['user']['email']?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="badge" for="">Nom : </label>
                        <input class="form-control" type="text" name="nom" placeholder='<?= $_SESSION['user']['nom']?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="badge" for="">Prenom : </label>
                        <input class="form-control" type="text" name="prenom" placeholder='<?= $_SESSION['user']['prenom']?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="badge" for="">Entreprise : </label>
                        <input class="form-control" type="text" name="entreprise" placeholder='<?= $_SESSION['user']['nom_entreprise']?>'>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="badge" for="">Mot de passe : </label>
                        <input class="form-control" type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="badge" for="">Confirmez mot de passe : </label>
                        <input class="form-control" type="password" name="pass2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container">
                            <input class="btn btn-xs btn-secondary" type="submit" name="formSetProfil" value="Modifier">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

<?php
}