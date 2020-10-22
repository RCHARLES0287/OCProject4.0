<h2 class="titres_vues">Connexion</h2>


<form method="post" action="/admin/identification">
    <label for="login">Pseudo</label>
    <input required id="login" type="text" name="login" value="<?= $prevLogin ?>"/><br/>

    <label for="password">Mot de passe</label>
    <input required id="password" type="password" name="password"/><br/><br/>

    <input name="submit_button" type="submit" value="Connexion"/>
</form>


