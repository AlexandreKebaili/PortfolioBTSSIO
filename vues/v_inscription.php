    <div align="center">
    <h1>Inscription</h1>
<form action="index.php?uc=administrer&action=controleinscription" method="post">
        <table align="center">
        <tr>
            <td align="right">
                   <label for=""> Email : </label><input type ="email" name ="email">
            </td>
        </tr>
        <tr>   
            <td align="right">
                <label for="">  Entreprise : </label><input type ="text" name ="entreprise">
            </td>
        </tr>
        <tr>   
            <td align="right">
                <label for="">  Nom : </label><input type ="text" name ="nom">
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for=""> Prenom : </label><input type ="text" name ="prenom">
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="" align='left'> Mot de passe : </label><input type ="password" name ="pass">
            </td>
        </tr>
        <tr>
            <td align="right">
                <label for="" align="right"> Confirmer mot de passe : </label><input type ="password" name ="pass2">
            </td>
        </tr>
        <tr>
            <td align="right">
                <input type="submit" name="forminscription" value="S'inscrire">
            </td>
        </tr>
        </table>
    </div>
</form>
<br>
<p>Si vous possedez déjà un compte <a href="index.php?uc=administrer&action=connexion">connectez vous</a> !</p>