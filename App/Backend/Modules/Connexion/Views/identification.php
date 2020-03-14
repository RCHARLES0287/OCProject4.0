<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
</head>

<body>
<h2>Connection</h2>

<form method="post" action="/admin/identification">
    <label for="login">Pseudo</label>
    <input required id="login" type="text" name="login" value="<?= $prevLogin ?>"/><br />

    <label for="password">Mot de passe</label>
    <input required id="password" type="password" name="password" /><br /><br />

    <input name="submit_button" type="submit" value="Connexion" />
</form>
</body>
</html>

<!-- route : http://blogauteur.romaincharlesdemonstrator.ovh/admin/identification
 <route url="/admin/identification" module="Connexion" action="identification" ></route>-->
