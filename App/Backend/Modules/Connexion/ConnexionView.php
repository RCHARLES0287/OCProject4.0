<!DOCTYPE html>
<html>
  <head>
    <title>Blog Auteur</title>
    <meta charset="utf-8" />
  </head>
  
  <body>
    <h2>Connection</h2>

    <form method="post" action="ConnexionController.php">
        <label>Pseudo</label>
        <input type="text" name="login" /><br />
        
        <label>Mot de passe</label>
        <input id="identification_validation_button" type="password" name="password" /><br /><br />
        
        <input type="submit" value="Connexion" />
    </form>
  </body>
</html>

